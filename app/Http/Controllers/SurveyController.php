<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; 
use App\Models\Respondent;
use App\Models\Answer;

class SurveyController extends Controller
{
    // 1. Halaman Menu Utama
    public function home()
    {
        return view('welcome');
    }

    // 2. Halaman Form Kuesioner
    public function index()
    {
        $attitude_questions = config('questions.attitude');
        $knowledge_questions = config('questions.knowledge');
        $sjt_questions = config('questions.sjt'); // Tambahan baru
        $skills_questions = config('questions.skills');

        return view('survey.form', compact(
            'attitude_questions', 
            'knowledge_questions', 
            'sjt_questions', 
            'skills_questions'
        ));
    }

    // 3. Proses Simpan (Store)
    public function store(Request $request)
    {
        // 1. Validasi Input (Sama seperti sebelumnya)
        $rules = [
            'gender' => 'required', 'age_range' => 'required', 'education' => 'required',
            'occupation' => 'required', 'province' => 'required',
            'training_title' => 'required_if:has_training,1',
        ];
        
        foreach (['attitude', 'knowledge', 'sjt', 'skills'] as $cat) {
            foreach (config("questions.$cat") as $code => $val) {
                $rules["answers.$code"] = 'required';
            }
        }
        $request->validate($rules);

        // 2. Inisialisasi Skor
        $scoreA = 0; $scoreK = 0; $scoreS = 0; $scoreP = 0;

        // 3. Kalkulasi Skor Otomatis
        if ($request->has('answers')) {
            foreach ($request->answers as $code => $userAnswer) {
                // Bagian A (Sikap): Skor = Nilai yang dipilih (1-5)
                if (str_starts_with($code, 'A')) {
                    $scoreA += (int)$userAnswer;
                }
                // Bagian B (Pengetahuan): Benar = 1, Salah = 0
                elseif (str_starts_with($code, 'K')) {
                    $correct = config("questions.knowledge.$code.correct_answer");
                    if ($userAnswer === $correct) $scoreK++;
                }
                // Bagian SJT: Benar = 1, Salah = 0
                elseif (str_starts_with($code, 'SJT')) {
                    $correct = config("questions.sjt.$code.correct_answer");
                    if ($userAnswer === $correct) $scoreS++;
                }
                // Bagian C (Keterampilan): Benar = 1, Salah = 0
                elseif (str_starts_with($code, 'P')) {
                    $correct = config("questions.skills.$code.correct_answer");
                    if ($userAnswer === $correct) $scoreP++;
                }
            }
        }

        $totalScore = $scoreA + $scoreK + $scoreS + $scoreP;

        // 4. Simpan ke Database
        DB::transaction(function () use ($request, $scoreA, $scoreK, $scoreS, $scoreP, $totalScore) {
            $respondent = Respondent::create([
                'gender' => $request->gender,
                'age_range' => $request->age_range,
                'education' => $request->education,
                'occupation' => $request->occupation,
                'province' => $request->province,
                'has_training' => $request->has('has_training'),
                'training_title' => $request->training_title,
                'training_organizer' => $request->training_organizer,
                'training_date' => $request->training_date,
                // Simpan Skor
                'score_attitude' => $scoreA,
                'score_knowledge' => $scoreK,
                'score_sjt' => $scoreS,
                'score_skills' => $scoreP,
                'total_score' => $totalScore,
            ]);

            foreach ($request->answers as $code => $value) {
                Answer::create([
                    'respondent_id' => $respondent->id,
                    'question_code' => $code,
                    'answer_value' => $value
                ]);
            }
        });

        return redirect()->route('survey.success');
    }

    // 4. Halaman List Responden (DataTables)
    public function results()
    {
        // Mengambil semua responden urut dari yang terbaru
        $respondents = Respondent::latest()->get(); 
        return view('survey.results', compact('respondents'));
    }

    // 5. Halaman Detail Jawaban Per Responden
    public function show($id)
    {
        // Ambil responden beserta jawabannya
        $respondent = Respondent::with('answers')->findOrFail($id);
        
        // Kita butuh teks soal lagi untuk ditampilkan di viewer
        $questions = [
            'attitude' => config('questions.attitude'),
            'knowledge' => config('questions.knowledge'),
            'sjt' => config('questions.sjt'),
            'skills' => config('questions.skills'),
        ];

        return view('survey.show', compact('respondent', 'questions'));
    }
}

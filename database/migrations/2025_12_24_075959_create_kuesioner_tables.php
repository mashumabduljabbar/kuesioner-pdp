<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateKuesionerTables extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Tabel Responden
        Schema::create('respondents', function (Blueprint $table) {
            $table->id();
            $table->boolean('is_agreed')->default(false); // Consent
            $table->string('gender'); // Laki-laki/Perempuan
            $table->string('age_range'); // 18-24, 25-34, dst
            $table->string('education');
            $table->string('occupation');
            $table->string('province');
            
            // Data Pelatihan (Nullable karena opsional)
            $table->boolean('has_training')->default(false);
            $table->string('training_title')->nullable();
            $table->string('training_organizer')->nullable();
            $table->string('training_date')->nullable();
            
            $table->timestamps();
        });

        // Tabel Jawaban (Menampung semua jawaban A, B, SJT, C)
        Schema::create('answers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('respondent_id')->constrained('respondents')->onDelete('cascade');
            $table->string('question_code'); // Contoh: A1, K1, SJT1, P1
            $table->text('answer_value'); // Menyimpan nilai jawaban (1-5, atau teks opsi)
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('answers');
        Schema::dropIfExists('respondents');
    }
}

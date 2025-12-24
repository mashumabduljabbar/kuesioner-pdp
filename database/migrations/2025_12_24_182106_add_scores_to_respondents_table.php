<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddScoresToRespondentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::table('respondents', function (Blueprint $table) {
            // Skor per kategori
            $table->integer('score_attitude')->default(0)->after('training_date');
            $table->integer('score_knowledge')->default(0)->after('score_attitude');
            $table->integer('score_sjt')->default(0)->after('score_knowledge');
            $table->integer('score_skills')->default(0)->after('score_sjt');
            
            // Total skor keseluruhan
            $table->integer('total_score')->default(0)->after('score_skills');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('respondents', function (Blueprint $table) {
            $table->dropColumn([
                'score_attitude', 
                'score_knowledge', 
                'score_sjt', 
                'score_skills', 
                'total_score'
            ]);
        });
    }
}

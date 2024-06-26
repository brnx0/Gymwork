<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void{
        Schema::create('treinos', function (Blueprint $table) {
            $table->bigIncrements('idTreinos')->primary();
            $table->foreignId('idAluno')->references('id')->on('alunos');
            $table->json('treinoA')->nullable();
            $table->json('treinoB')->nullable();
            $table->json('treinoC')->nullable();
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void {
        Schema::dropIfExists('treinos');
        //
    }
};

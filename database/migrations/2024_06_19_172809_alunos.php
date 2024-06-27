<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void{ 
    
        Schema::create('alunos', function (Blueprint $table) {
            $table->bigIncrements('id')->primary();
            $table->string('cpf')->nullable()->unique();
            $table->string('nome')->nullable();
            $table->string('tel');
            $table->string('cep');
            
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('aluno');
    }
};

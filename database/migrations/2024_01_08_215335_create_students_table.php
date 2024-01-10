<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('students', function (Blueprint $table) {
            $table->id();
            $table->string('student_name');
            $table->string('student_email');
            $table->enum('student_gender', ['Male', 'Female']);
            $table->string('student_image');
            
            $table->string('nome_locador')->nullable($value = true);
            
            $table->string('nacionalidade_locador')->nullable($value = true);
            $table->string('estado_civil_locador')->nullable($value = true);
            $table->string('RG_locador')->nullable($value = true);
            $table->string('CPF_locador')->nullable($value = true);
            
            $table->string('nome_locatario')->nullable($value = true);
            $table->string('nacionalidade_locatario')->nullable($value = true);
            $table->string('RG_locatario')->nullable($value = true);
            $table->string('CPF_locatario')->nullable($value = true);
            
            $table->string('logradouro_objeto')->nullable($value = true);
            $table->string('numero_objeto')->nullable($value = true);
            $table->string('complemento_objeto')->nullable($value = true);
            $table->string('bairro_objeto')->nullable($value = true);
            $table->string('cidade_objeto')->nullable($value = true);
            $table->string('UF_objeto')->nullable($value = true);

            $table->string('duracao_contrato')->nullable($value = true);
            $table->decimal('valor_contrato', $precision = 8, $scale = 2)->nullable($value = true);
            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('students');
    }
};
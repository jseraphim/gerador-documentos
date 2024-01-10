<?php
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    protected $fillable = ['student_name', 'student_email', 'student_gender', 'student_image', 'nome_locador','nacionalidade_locador', 'estado_civil_locador','RG_locador','CPF_locador','nome_locatario','nacionalidade_locatario','RG_locatario','CPF_locatario','logradouro_objeto','numero_objeto','complemento_objeto','bairro_objeto','cidade_objeto','UF_objeto','duracao_contrato','valor_contrato'];
}
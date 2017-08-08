<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $table = 'alunos';

    protected $fillable = [
        'matricula', 
        'nome', 
        'turma',
        'horario',
    ];

    public function notas(){
        return $this->hasMany('App\Nota');
    }  
}

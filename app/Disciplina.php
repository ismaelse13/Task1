<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Disciplina extends Model
{
    protected $table = 'disciplinas';

    public function alunos(){
        return $this->hasMany('App\Aluno');
    }
}

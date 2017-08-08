<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Disciplina extends Model
{
    protected $table = 'disciplinas';

    protected $fillable = [
        'serie_id',
        'nome',
        'professor',
    ];

    public function alunos(){
        return $this->hasMany('App\Aluno');
    }
     
    public function notas() {
        return $this->hasMany('App\Nota');
    }
}

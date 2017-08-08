<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notas';

    protected $fillable = [
        'disciplina_id',
        'aluno_id',
        'prova_1',
        'prova_2',
        'prova_3',
        'prova_4',
        'prova_rec',
        'media_final',
    ];

    public function disciplina(){
        return $this->belongsTo('App\Disciplina');
    }

    public function aluno(){
        return $this->belongsTo('App\Aluno');
    }
}

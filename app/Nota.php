<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nota extends Model
{
    protected $table = 'notas';

    public function disciplina(){
        return $this->belongsTo('App\Disciplina');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Niveau extends Model
{
    public function equipes()
    {
        return $this->hasMany('App\Equipe');
    }
}

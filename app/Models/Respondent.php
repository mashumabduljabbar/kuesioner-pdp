<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Respondent extends Model
{
    protected $guarded = ['id'];

    public function answers()
    {
        return $this->hasMany(Answer::class);
    }
}
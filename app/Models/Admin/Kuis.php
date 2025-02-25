<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Model;
use App\Models\Guru;

class Kuis extends Model
{
    protected $guarded = ['id'];

    public function soal(){
        return $this->belongsTo(Soal::class);
    }

    public function guru(){
        return $this->belongsTo(Guru::class);
    }
}

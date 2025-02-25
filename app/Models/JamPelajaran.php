<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Models\Pegawai;
use App\Models\{JadwalPelajaran, MataPelajaran, JamPelajaran};

class JamPelajaran extends Model
{
    protected $guarded = ['id'];

    public function jadwalPelajaran(){
        return $this->hasMany(JadwalPelajaran::class);
    }
}

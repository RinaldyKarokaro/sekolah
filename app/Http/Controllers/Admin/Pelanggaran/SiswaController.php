<?php

namespace App\Http\Controllers\Admin\Pelanggaran;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SiswaController extends Controller
{
    public function index() {
        return view('admin.pelanggaran.siswa');
    }
}

<?php

namespace App\Http\Controllers\Admin\EVoting;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalonController extends Controller
{
    public function index() {
        return view('admin.e-voting.calon');
    }
}

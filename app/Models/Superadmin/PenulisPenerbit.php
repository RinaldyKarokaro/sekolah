<?php

namespace App\Models\Superadmin;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PenulisPenerbit extends Model
{ //
    use SoftDeletes;
    
    protected $guarded = [];
}

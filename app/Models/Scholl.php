<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class scholl extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'school_code', 'address'];
    protected $hidden = ['created_at', 'updated_at'];
}

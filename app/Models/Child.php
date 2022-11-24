<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class child extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'surname', 'personal_code', 'date_of_birth', 'class'];
    protected $hidden = ['created_at', 'updated_at'];
}

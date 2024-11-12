<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Intern extends Model
{
    protected $fillable = [
        'name',
        'course',
        'institution',
        'career_path'
    ];
}
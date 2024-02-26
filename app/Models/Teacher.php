<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Teacher extends Model
{
    use HasFactory;
    protected $fillable = [
        'Fullname',
        'email',
        'DOB',
        'province',
        'district',
        'sector',
        'cell',
        'village',
        'courseteach',
        'gender',
        'image',
        'degree',
        'Phone'
    ];
    
}


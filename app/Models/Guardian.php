<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Guardian extends Model
{
    use HasFactory;
    protected $fillable = [
        'fatherName',
        'motherName',
        'phone',
        'nationality',
        'address',
        'prtImage',
        'studentFname',
        'studentLname',
        'section',
        'class',
        'gender',
        'studBirthdate',
        'studImage'
        
    ];
} 

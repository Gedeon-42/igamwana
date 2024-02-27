<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;
    protected $fillable = [
          'Full_name',
          'DOB',
          'email',
          'province',
          'district',
          'sector',
          'Parent',
          'Phone',
          'cell',
          'village',
          'section',
          'gender',
          'image',
          'yearofstudy'
    ];
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Hostel extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'Room_no',
        'gender_type',
        'Room_type',
         'beds_no',
         'amount'
    ];
}

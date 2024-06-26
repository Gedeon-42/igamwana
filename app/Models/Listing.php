<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    use HasFactory;

    // protected $fillable=[
    //     'title',
    //     'description',
    //     'company',
    //     'website',
    //     'tags',
    //     'location'
    // ];

    public function scopeFilter($query,array $filters){
if($filters['tag'] ?? false){
    $query->where('tag','like','%' . request('tag') . '%');
}
if($filters['search'] ?? false){
    $query->where('title','like','%' . request('search') . '%');

                                                              //->orWhere('description','like','%' . request('search' . '%'));
    //  ->orWhere('location','like','%'  .request('search' . '%'));
}
    }

}

<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Course;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    //
    public function index(){
        $courses = Course::all();
        return view('Home.pages.courses',[
            'courses'=>$courses
        ]);
    }


    public function store(Request $request){

    }
}

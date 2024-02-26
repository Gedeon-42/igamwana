<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\About;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    //
    public function index(){
        $abouts = About::all();
        return view('Home.pages.about',[
            'abouts'=>$abouts
        ]);
    }


    public function store(Request $request){

    }

}

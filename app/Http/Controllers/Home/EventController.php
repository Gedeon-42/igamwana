<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Event;
use Illuminate\Http\Request;

class EventController extends Controller
{
    //
    public function index(){
        $events = Event::all();
        return view('Home.pages.events',[
            'events'=>$events
        ]);
    }


    public function store(Request $request){

    }
}

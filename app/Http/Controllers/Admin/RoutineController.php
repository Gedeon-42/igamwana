<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Routine;
use Illuminate\Http\Request;

class RoutineController extends Controller
{
    //
    
    public function index(){
        $routines = Routine::all();
        return view('admin.routines.allRoutine',[
            'routines'=>$routines
        ]);
    }
    public function store(Request $request){
$formData = $request->validate(([
    'day'=>'required|string',
    'class'=>'required|string',
    'subject'=>'required|string',
    'section'=>'required|string',
    'teacher'=>'required|string',
    'startTime'=>'required|string',
    'endtime'=>'required|string',
    'date'=>'required|string'
]));

Routine::create($formData);
return redirect('/admin/routines/allRoutine')->with('message','routine added successfully');
    }

    public function create(){
        return view('admin.routines.addRoutine');
    }


    public function update(Request $request ,Routine $routine){

        $formData = $request->validate(([
            'day'=>'string',
            'class'=>'string',
            'subject'=>'string',
            'section'=>'string',
            'teacher'=>'string',
            'startTime'=>'string',
            'endtime'=>'string',
            'date'=>'string'
        ]));
        
        $routine->update($formData);
        return redirect('/admin/routines/allRoutine')->with('message','routine updated successfully');
    }

    public function edit(Routine $routine){

        return view('admin.routines.editRoutine',[
            'routine'=>$routine
        ]);
    }

    public function destroy(Routine $routine){
$routine->delete();
 
return back()->with('message','routine deleted sucessfully');
    }
}

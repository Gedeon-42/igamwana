<?php

namespace App\Http\Controllers\Admin;

use App\Models\Exam;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ExamController extends Controller
{
    //
    public function index(){

        $exams = Exam::all();
        return view('admin.exam.allExam',[
            'exams'=>$exams
        ]);
    }

    public function store(Request $request){

        $formInput = $request->validate([
            'exam_type'=>'string|required',
            'subject'=>'string|required',
            'class'=>'string|required',
            'section'=>'string|required',
            'startTime'=>'string|required',
            'endTime'=>'string|required',
            'startDate'=>'string|required'
        ]);

        Exam::create($formInput);
        return redirect('/admin/exams')->with('message','exam added successfully');
    }

    public function create(){
        return view('admin.exam.addExam');
    }

    public function update(Request $request,Exam $exam)
    {
        $formInput = $request->validate([
            'exam_type'=>'string',
            'subject'=>'string',
            'class'=>'string',
            'section'=>'string',
            'startTime'=>'string|required',
            'endTime'=>'string|required',
            'startDate'=>'string'
        ]);

        $exam->update($formInput);
        return redirect('/admin/exams')->with('message','exam added successfully');
    }

    

    public function edit(Exam $exam){

        return view('admin.exam.editExam',[
            'exam'=>$exam
        ]);
    }


    public function destroy(Exam $exam){
        $exam->delete();

        return back()->with('message','exam deleted successfully');
    }
}

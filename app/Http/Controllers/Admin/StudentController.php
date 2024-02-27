<?php

namespace App\Http\Controllers\Admin
;

use App\Models\Student;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class StudentController extends Controller
{
    // 
    public function index(){
       $students=Student::all();
        return view('admin.students.students',[
            'students'=>$students
        ]);
    }
    public function store(Request $request){
        // dd($request->file('image'));
       $formData = $request->validate([
           'Full_name'=>'required',
            'DOB'=>'required',
            'province'=>'required',
            'district'=>'required',
            'sector'=>'required',
            'cell'=>'required',
            'village'=>'required',
            'yearofstudy'=>'required|string',
            'email'=>'required|email|unique:students,email',
            'section'=>'required',
            'gender'=>'required',
            'Phone'=>'required',
            'Parent'=>'required'
        ]);

        if($request->hasFile('image')){
            $formData['image']= $request->file('image')->store('studImgs','public');
                 }
        Student::create($formData);

        //  clear input after submittting
        
        // $request->session()->forget('_old_input');
         return redirect('/admin/students')->with('message','Student added successfully');
    }

    // create student function
    public function create(){
        return view('admin.students.createStudent');
    }
//show student details
public function show( Student $student){
    return view('admin.students.showStudent',[
        'student'=>$student
    ]);
}


    // update student function
    public function update(Request $request,Student $student){
        $updatedData = $request->validate([
            'Full_name'=>'string',
            'DOB'=>'string',
            'province'=>'string',
            'district'=>'string',
            'sector'=>'string',
            'cell'=>'string',
            'village'=>'string',
            'yearofstudy'=>'string',
            'email'=>'required|email|exists:students,email',
            'section'=>'string',
            // 'image'=>'string|nullable',
            'gender'=>'required|string',
        ]);
     

        if($request->hasFile('image')){
                    $updatedData['image']= $request->file('image')->store('studImgs','public');
                         } 
                 
        $student->update($updatedData);
        return redirect('/admin/students')->with('message','student updated succesfully');
    }
    //edit student function
    public function edit(Student $student){
        return view('admin.students.editStudent',[
            'student'=>$student
        ]);
        
    }
    //function to delete student
    public function destroy(Student $student){
        $student->delete();
        return back()->with('message','student deleted succesfully');
    }
}

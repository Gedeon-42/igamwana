<?php

namespace App\Http\Controllers\Admin;

use App\Models\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    //
    public function index(){
        
        $teachers = Teacher::all();
        return view('admin.teachers.allTeachers',[
            'teachers'=>$teachers
        ]);

    }

    public function store(Request $request){
 
        $formData = $request->validate([
        'Fullname'=>'string|required',
        'email'=>'required|email|unique:teachers,email',
        'DOB'=>'string|required',
        'province'=>'string|required',
        'district'=>'string|required',
        'sector'=>'string|required',
        'cell'=>'string|required',
        'village'=>'string|required',
        'courseteach'=>'string|required',
        'gender'=>'string|required',
        //'image'=>'string|required',
        'degree'=>'string|required',
        'Phone'=>'string|required'
        ]);
     if($request->hasFile('image')){
    $formData['image']= $request->file('image')->store('tchImg','public');
      }
        // store data in database
         Teacher::create($formData);
         return redirect('/admin/teachers')->with('message','Teacher added successfully');

    }
    public function update(Request $request,Teacher $teacher){
        $formData = $request->validate([
            'Fullname'=>'string|required',
            'email'=>'required|email|exists:teachers,email',
            // 'DOB'=>'string',
            'province'=>'string',
            'district'=>'string',
            'sector'=>'string',
            'cell'=>'string',
            'village'=>'string',
            'courseteach'=>'string',
            'gender'=>'string',
            //'image'=>'string|required',
            'degree'=>'string',
            'Phone'=>'string'
            ]);

            if($request->hasFile('image')){
                $formData['image']= $request->file('image')->store('tchImg','public');
            }

            // update teacher
            $teacher->update($formData);

            return redirect('/admin/teachers')->with('message','Teacher updated successfully');
    }

    public function create(){
        return view('/admin/teachers/createTeacher');
    }


    public function edit(Teacher $teacher ){

        return view('/admin/teachers/editTeacher',[
            'teacher'=>$teacher
        ]);
    }

    public function show(Teacher $teacher){
        return view('/admin/teachers/teacherDetails',[
            'teacher'=>$teacher
        ]);
    }


    public function destroy(Teacher $teacher){

        $teacher->delete();
        return back()->with('message','teacher deleted successfully');
    }
}

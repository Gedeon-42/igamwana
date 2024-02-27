<?php

namespace App\Http\Controllers\Admin;

use App\Models\Guardian;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ParentController extends Controller
{
    //
    public function  index(){
       $parents = Guardian::all();
       return view('admin.parents.allParents',[
        'parents'=>$parents
       ]);
    }
    public function store(Request $request){
        $formdata = $request->validate([
            'fatherName'=>'required|string',
            'motherName'=>'required|string',
            'phone'=>'required|string',
            'nationality'=>'required|string',
            'address'=>'required|string',
            'prtImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
            'studentFname'=>'required|string',
            'studentLname'=>'required|string',
            'section'=>'required|string',
            'class'=>'required|string',
            'gender'=>'required|string',
            'studBirthdate'=>'required|string',
            'studImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);
    
        if($request->hasFile('prtImage')){
            $formdata['prtImage'] = $request->file('prtImage')->store('prtImage','public');
        }
    
        if($request->hasFile('studImage')){
            $formdata['studImage'] = $request->file('studImage')->store('studImg','public');
        }
        
    
        Guardian::create($formdata);
        return redirect('/admin/parents')->with('message','parent added successfully');
    }

    public function create(){
        return view('admin.parents.addParent');
    }

    public function update(Request $request,Guardian $parent){
        $formdata = $request->validate([
            'fatherName'=>'string',
            'motherName'=>'string',
            'phone'=>'string',
            'nationality'=>'string',
            'address'=>'string',
            //  'prtImage' => 'max:2048',
            'studentFname'=>'string',
            'studentLname'=>'string',
            'section'=>'string',
            'class'=>'string',
            'gender'=>'string',
            'studBirthdate'=>'date',
            //  'studImage' => 'max:2048',
        ]);
        if($request->hasFile('prtImage')){
            $formdata['prtImage'] = $request->file('prtImage')->store('prtImage','public');
        }
    
        if($request->hasFile('studImage')){
            $formdata['studImage'] = $request->file('studImage')->store('studImg','public');
        }
        
        $parent->update($formdata);
         return redirect('/admin/parents')->with('message','parent updated successfully');
    }

    public function edit(Guardian $parent){
        return view('admin.parents.editParent',[
            'parent'=>$parent
        ]);
    }

    public function show(Guardian $parent){
        return view('admin.parents.showParent',[
            'parent'=>$parent
        ]);
    }

    public function destroy(Guardian $parent){
    
    $parent->delete();
      return back()->with('message','parent deleted successfully');
    
    }
}

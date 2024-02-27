<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Notee;
use Illuminate\Http\Request;

class NoticeController extends Controller
{
    //
    public function index(){
        $notices = Notee::all();
        return view('admin.notices.allNotice',[
            'notices'=>$notices
        ]);
    }


    public function store(Request $request){
    $formDataa =  $request->validate(([
        'title'=>'string',
        'details'=>'string',
        'author'=>'string',
        'date'=>'string'
    ]));
        // dd($formData); // Debugging statement to check if validation is passing

        Notee::create($formDataa);

        return redirect('/admin/notices')->with('message','notice created successfully');
    }

    public function create(){
        return view('admin.notices.addNotice');
    }

    public function update(Request $request,Notee $notice){
        $formDataa = $request->validate([
            'title'=>'string',
            'details'=>'string',
            'author'=>'string',
            'date'=>'string'
        ]);
        $notice->update($formDataa);
        return redirect('/admin/notices')->with('message','notice updated successfully');
    }

    public function edit(Notee $notice){
    
        return view('admin.notices.editNotice',[
            'notice'=>$notice
        ]);
    }


    public function destroy(Notee $notice){
        $notice->delete();
        return back()->with('message','notice deleted successfully');
    }
}

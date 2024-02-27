<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Hostel;

class HostelController extends Controller
{
    //
    public function index(){
        $hostels = Hostel::all();

        return view('admin.hostels.allHostel',[
            'hostels'=>$hostels
        ]);
    }
    public function store(Request $request){
        $formData = $request->validate([
            'name'=>'required|string',
            'Room_no'=>'required|string',
            'gender_type'=>'required|string',
            'Room_type'=>'required|string',
             'beds_no'=>'required|string',
             'amount'=>'required|string'
        ]);
        Hostel::create($formData);
        return redirect('/admin/hostels')->with('message','hostel recorded succesfully');
    }

    public function create(){
        return view('admin.hostels.createHostel');
    }
    public function update(Request $request, Hostel $hostel){
        $formData = $request->validate([
                'name'=>'string',
                'Room_no'=>'string',
                'gender_type'=>'string',
                'Room_type'=>'string',
                'beds_no'=>'string',
                'amount'=>'string'
        ]);

        $hostel->update($formData);
        return redirect('/admin/hostels')->with('message','hostel updated succesfully');
    }

    public function edit(Hostel $hostel){
        return view('admin.hostels.editHostel',[
            'hostel'=>$hostel
        ]);
    }

    public function destroy(Hostel $hostel){
        
        $hostel->delete();
        return back()->with('message','hostel deleted successfully');
    }
}

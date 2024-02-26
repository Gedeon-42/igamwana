<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    //
    public function index(){
        $contacts = Contact::all();
        return view('Home.pages.contacts',[
            'contacts'=>$contacts
        ]);
    }
    


    public function store(Request $request){

    }
}

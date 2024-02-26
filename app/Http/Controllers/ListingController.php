<?php

namespace App\Http\Controllers;

use App\Models\Listing;
use Illuminate\Http\Request;

class ListingController extends Controller
{
    //show all listing
    public function index(){
    
        
 return view('Listings.listing',[
    'listings'=>Listing::latest()->filter(request(['search']))->paginate(30)
 ]);
    }


// show single listing
    public function show(Listing $listing){

        
        return view('Listings.singleListing',[
            'listing'=>$listing
        ]);
    }


    // show form to create new listing
    public function create(){

        return view('Listings.createListing');
    }


    // store new listing
    public function store(Request $request){
        // dd($request->all());
        // dd($request->file('logo'));
        $formData = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'company'=>'string',
            'location'=>'required|string',
            'website'=>'string',
            'tags'=>'string'
        ]);
        
        if($request->hasFile('logo')){
   $formData['logo']= $request->file('logo')->store('logos','public');
        }
         Listing::create($formData);

        return redirect('/')->with('message','Listing created successfully');
        
            }
        

    // show form to edit new listing

    public function edit( Listing $listing){
    //    dd($listing->title);
        return view('listings.editListing',[
            'listing'=>$listing
        ]);

    }

    // update listing

    public function update(Request $request,Listing $listing){
        $formData = $request->validate([
            'title'=>'required',
            'description'=>'required',
            'company'=>'string',
            'location'=>'required|string',
            'website'=>'string',
            'tags'=>'string'
        ]);
        
        if($request->hasFile('logo')){
   $formData['logo']= $request->file('logo')->store('logos','public');
        }
         $listing->update($formData);

        return back('/')->with('message','Listing created successfully');
        


    }
    

    //delete listing

    public function destroy(Listing $listing){
        $listing->delete();
        return redirect('/')->with('message','listing deleted successfully');

    }

}

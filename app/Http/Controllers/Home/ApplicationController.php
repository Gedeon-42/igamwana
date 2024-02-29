<?php

namespace App\Http\Controllers\Home;

use App\Http\Controllers\Controller;
use App\Models\Cell;
use App\Models\District;
use App\Models\Province;
use App\Models\Sector;
use App\Models\Village;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    //
    public function index(){
        $data['provinces'] = Province::get(["name", "id"]);
        return view('Home.pages.applicationForm',$data);
    }

    public function fetchDistrict(Request $request)
    {
        $data['districts'] = District::where("province_id", $request->province_id)
                                ->get(["name", "id"]);
  
        return response()->json($data);
    }
    public function fetchSector(Request $request)
    {
        $data['sectors'] = Sector::where("district_id", $request->district_id)
                                    ->get(["name", "id"]);
                                      
        return response()->json($data);
    }

    public function fetchCell(Request $request)
    {
        $data['cells'] = Cell::where("sector_id", $request->sector_id)
                                    ->get(["name", "id"]);
                                      
        return response()->json($data);
    }
    public function fetchVillage(Request $request)
    {
        $data['villages'] = Village::where("cell_id", $request->cell_id)
                                    ->get(["name", "id"]);
                                      
        return response()->json($data);
    }
}

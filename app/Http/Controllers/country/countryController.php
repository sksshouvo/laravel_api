<?php

namespace App\Http\Controllers\country;
use App\country;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class countryController extends Controller
{
    public function country(){
        return country::all();
    }
    public function countryById($id){
        return response()->json(country::find($id), 200);
    }
    public function countrySaved(request $request){
        $country = country::create($request->all());
        return response()->json($country, 201);
    }
    public function countryUpdate(request $request, $id){
        $country = country::find($id);
        if(is_null($country)){
            return response()->json(["message"=>"No Record Found"]);
        }else{
            $country->update([
                "name"=>$request->name
                ]);
                return response()->json($country, 200);
        }
        
    }
    public function countryDelete(request $request, $id){
        $country = country::find($id);
        if(is_null($country)){
            return response()->json(["message"=>"No record found"]);
        }
        $country->delete();
        return response()->json(null, 204);
    }
}


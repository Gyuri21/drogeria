<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Models\Perfume;
use Validator;

class PerfumeController extends Controller
{

    public function getPerfumes() {

        $perfumes = Perfume::all();

        return view( "perfumes", [
            "perfumes" => $perfumes
        ] );
    }

    public function newPerfume() {

        return view( "new_perfume" );
    }

    public function storePerfume( Request $request ) {
        $input = $request->all();
        $validator = Validator::make($input, [
            "name"=>"required",
            "type"=>"required",
            "price"=>"required|integer"
        ]);
        if($validator->fails())
        {
            return redirect("/perfumes")->with('alert', "Töltse ki a mezőket!");
        }
        Perfume::create($input);


        return redirect( "/perfumes" );
    }


    public function editPerfume( $id ) {

        $perfume = Perfume::find( $id );

        return view( "edit_perfume", [
            "perfume" => $perfume
        ]);
    }

    public function updatePerfume( Request $request ) {


        $input = $request->all();
        $validator = Validator::make($input, [
            "name"=>"required",
            "type"=>"required",
            "price"=>"required|integer"
        ]);
        if($validator->fails())
        {
            return redirect("/perfumes")->with('alert', "Töltse ki a mezőket!");
        }


 
        $perfumes = Perfume::find( $request[ "id" ]);
     
        $perfumes->name = $request[ "name" ];
        $perfumes->type = $request[ "type" ];
        $perfumes->price = $request[ "price" ];
     
        $perfumes->save();
     
        return redirect( "/perfumes" );
    }

    public function deletePerfume( $id ) {

        $perfume = Perfume::find( $id );
        $perfume->delete();

        return redirect( "perfumes" );
    }
}

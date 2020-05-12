<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Patient;
use App\Alerte;

class PatientController extends Controller
{
    //
    public function login(Request $request){
        $code=$request->access_code;
        $patient= Patient::where('access_code', $code)->first();
        if(isset($patient)){
            return response()->json($patient,200);
        }
        return response()->json("Compte n'existe pas",401);
    }

    public function patientAlertes(Request $request){
        $id=$request->id;
        $alertes=Alerte::all()->where('id_patient',$id);
        
        return response()->json($alertes);
    }

}

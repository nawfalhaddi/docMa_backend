<?php

namespace App\Http\Controllers\API;

use App\Alerte;
use App\Patient;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;


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

    public function ajoutAlerte(Request $request){
        $alerte=New Alerte;
        $alerte->id_patient=$request->id_patient;
        $alerte->id_medecin=1;
        $alerte->longitude=$request->longitude;
        $alerte->latitude=$request->latitude;
        $alerte->nbr_battement=$request->nbr_battement;
        $alerte->degre_douleur=$request->degre_douleur;
        $alerte->tension=$request->tension;
        $alerte->temperature=$request->temperature;
        $alerte->file_ordonance="";
        $alerte->remarque='';
        $alerte->vu_medecin=0;
        $alerte->vu_patient=0;
        $alerte->date=date("Y-m-d");
        $alerte->date_traitement=date("Y-m-d");
        $alerte->save();
        $last_row = DB::table('alertes')->latest()->first();

        return response()->json( $last_row,200);

    }


    

}

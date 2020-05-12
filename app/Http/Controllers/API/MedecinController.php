<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\Alerte;
use App\User;

class MedecinController extends Controller
{
    //
    public function medecinAlertes(){
        $id=Auth::user()->id;
        $alertes=Alerte::all()->where('id_medecin','=',$id);
        return response()->json($alertes);
    }


    public function medecinPatients(){
        $user=User::find(Auth::user()->id);
        return response()->json($user->patients);
    }

    public function ajoutReponse(Request $request){
        $alert=Alerte::find($request->id);
        $alert->remarque=$request->remarque;
        $alert->vu_medecin=1;

        $alert->save();
        return response()->json('good');
    }


}

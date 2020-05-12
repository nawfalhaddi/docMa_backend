<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Alerte extends Model
{
    protected $fillable = [
        'id_patient', 'id_medecin', 'longitude','latitude','date','nbr_battement','degre_douleur','tension','temperature','remarque','file_ordonance','date_traitement','vu_medecin','vu_patient'
    ];

    
}

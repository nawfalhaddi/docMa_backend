<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Patient extends Model
{
    protected $fillable = [
        'fname', 'lname', 'access_code','active',
    ];
    
    public function medecins()
    {
        return $this->belongsToMany('App\User');
    }

    public function alertes(){
        return $this->hasMany('App\Alerte');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Client extends Model
{
    protected $fillable = [
        'civilite','nom', 'prenom', 'adresse','code_postal','localite','ville','pays','email','telephone','mobile',
    ];
    
    public function devis(){
    	return $this->hasMany('App\Devis');
    }
}


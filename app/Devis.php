<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Devis extends Model
{
  	//protected $fillable = [
    	//'name', 'email',
   //];
    protected $dates = [
    	'date_devis', 'date_commande', 'date_facture'
   ];
    public function client(){
    	return $this->belongsTo('App\Client');
    }
}

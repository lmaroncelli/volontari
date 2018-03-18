<?php

namespace App;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Volontario extends Model
	{
  
  protected $table = 'tblVolontari';

  protected $guarded = ['id'];



  protected $dates = ['data_nascita'];


  public function setDataNascitaAttribute($value)
   	{
    $this->attributes['data_nascita'] = Carbon::createFromFormat('d/m/Y', $value);
   	}

  public function getDataNascitaAttribute($value)
		{
	  return Carbon::parse($value)->format('d/m/Y');
		}


  public function associazione()
  	{
  		return $this->belongsTo('App\Associazione','associazione_id','id');
  	}





	}

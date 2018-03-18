<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Volontario extends Model
	{
  
  protected $table = 'tblVolontari';

  protected $guarded = ['id'];



  protected $dates = ['data_nascita'];


  public function associazione()
  	{
  		return $this->belongsTo('App\Associazione','associazione_id','id');
  	}

	}

<?php

namespace App;

/******************************************************
 * IM - Vocabulary Builder
 * Version : 1.0.2
 * Copyright© 2016 Imprevo Ltd. All Rights Reversed.
 * This file may not be redistributed.
 * Author URL:http://imprevo.net
 ******************************************************/

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Coin;

class Country extends Model
{
	protected $fillable = ['sortname', 'name', 'phonecode'];
	public $table = "countries";
}

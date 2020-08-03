<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Feedback extends Model
{
    protected $table = "_feedback";
    public function post()
	{
		return $this->belongsTo('App\Post','pid');
	}
}

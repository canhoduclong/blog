<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $table ='_post';
    public function category()
	{
		return $this->belongsTo('App\Category','cid');
	}
}

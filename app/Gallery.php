<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gallery extends Model
{
    protected $table = 'galleries';
	
	protected $fillable = ['category_id', 'title', 'slug'];
	
	public function category()
	{
		return $this->belongsTo('App\Category');
	}
	
	public function photos()
	{
		return $this->hasMany('App\Photo');
	}
}

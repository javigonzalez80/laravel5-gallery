<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
    protected $table = 'photos';
	
	protected $fillable = ['gallery_id', 'title', 'image'];
	
	public function gallery()
	{
		return $this->belongsTo('App\Gallery');
	}

}

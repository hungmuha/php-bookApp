<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class book extends Model
{	
	public function author()
	{
		return $this->belongsTo(Author::class);
	}

	public function user()
	{
		return $this->hasMany(User::class);
	}
}

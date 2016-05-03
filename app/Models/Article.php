<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
	public static $TYPE_MD = 1;		// markdown
	public static $TYPE_RT = 2;		// rich text

	protected $fillable = ['title', 'brief', 'content', 'type', 'active'];
}

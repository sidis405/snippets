<?php

namespace App;

class Snippet extends Model
{
	public function forks()
	{
		return $this->hasMany(static::class, 'forked_id');
	}

	public function user()
	{
		return $this->belongsTo(User::class, 'user_id');
	}

	public function language()
	{
		return $this->belongsTo(Language::class, 'language_id');
	}

	public function isForked()
	{
		return !! $this->forkedSnippet;
	}

	public function forkedSnippet()
	{
		return $this->belongsTo(static::class, 'forked_id');
	}
}

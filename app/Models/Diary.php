<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Diary extends Model
{
    protected $fillable = [
    	'user_id',
    	'note',
    ];

    public function user()
    {
    	return $this->belongsTo(User::class);
    }
}

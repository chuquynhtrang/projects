<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Authenticatable
{
    protected $fillable = [
    	'name',
    	'email',
    	'password',
    	'address',
    	'phone',
    	'avatar',
    	'role',
    ];

    protected $hidden = ['password'];

    public function course()
    {
    	return $this->belongsTo(Course::class);
    }

    public function class()
    {
    	return $this->belongsTo(Class::class);
    }

    public function council()
    {
    	return $this->belongsTo(Council::class);
    }

    public function projects()
    {
        return $this->belongsToMany(User::class);
    }

    public function diaries()
    {
        return $this->hasMany(Diary::class);
    }
}

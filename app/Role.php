<?php

namespace App;

use App\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
	protected $fillable = [
		'name', 'display_name', 'description'
	];

	protected static $logAttributes = [
		'name', 'display_name', 'description'
	];

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}

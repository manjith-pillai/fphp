<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\Agents as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Agents extends Model
{
	use notifiable;
    protected $table = 'agents';
	
	protected $hidden = [
        'password', 'remember_token',
    ];
   
}

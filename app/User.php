<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Zizaco\Entrust\Traits\EntrustUserTrait;
use OwenIt\Auditing\Auditable;
use OwenIt\Auditing\Contracts\Auditable as AuditableContract;
use Illuminate\Broadcasting\Channel;


class User extends Authenticatable implements AuditableContract
{
    use Notifiable;
	use EntrustUserTrait;
	use Auditable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        //'name','title','password','email','status','department','occupation','number','address','image',
		'name','password','email',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
	
	public function receivesBroadcastNotificationsOn()
    {
         return 'my-channel';
		  /*return [
            new PrivateChannel('my-channel'),
        ];*/
        
    }

}

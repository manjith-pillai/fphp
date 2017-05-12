<?php

namespace App\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Queue\SerializesModels;
//use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Broadcasting\PresenceChannel;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;


class PusherEvent implements ShouldBroadcast
{
    //use InteractsWithSockets, SerializesModels;
use InteractsWithSockets, SerializesModels;


    /**
     * Create a new event instance.
     *
     * @return void
     */
	 
	public $user;
	
	
    public function __construct($user)
    {
          
		  $this->user = $user;
		 //$this->message  = "{$user->name} acceept  your status";
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return Channel|array
     */
    public function broadcastOn()
    {
        //return new PrivateChannel('user.'.$this->user->id);
		
		return ['my-channel'];
    }
	
}


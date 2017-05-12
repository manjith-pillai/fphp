<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Messages\BroadcastMessage;
use Illuminate\Broadcasting\Channel;
use Auth;

class UsersCreated extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     *
     * @return void
     */
    public function __construct($user)
    {
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['database','mail','broadcast'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Welcome '.$this->user->name.',')
					->line('Thank You for registering with us. Warm Welcome to RealtyMatrix Ecommerce Platform!')
					->line('To Login to our Portal, We require you to activate your account by clicking the following link.')
                    ->action('Click Here', 'http://localhost:8000/verifyuseremail')
                    ->line('We thank you for showing interest and using our application!');
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed  $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            'userid' => $this->user->id,
			'name' => $this->user->name,
        ];
    }
	
	public function toBroadcast($notifiable)
	{
    return new BroadcastMessage([
        'userid' => $this->user->id,
		'name' => $this->user->name,
    ]);
	}
	
	public function broadcastOn() {
        return new Channel('my-channel');
    }

	
}

<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;

class SignupNotification extends Notification
{
    use Queueable;

    private $user;
    private $token;

    /**
     * Create a new notification instance.
     *
     * @param $user
     * @param $token
     */
    public function __construct($user, $token)
    {
        $this->token = $token;
        $this->user = $user;
    }

    /**
     * Get the notification's delivery channels.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function via($notifiable)
    {
        return ['mail'];
    }

    /**
     * Get the mail representation of the notification.
     *
     * @param  mixed $notifiable
     * @return \Illuminate\Notifications\Messages\MailMessage
     */
    public function toMail($notifiable)
    {
        return (new MailMessage)
            ->greeting('Hi ' . $this->user->name . ',')
            ->from('no-reply@bimcoin.cc', 'BimCoin')
            ->subject('Verify Your Email')
            ->line('Welcome tp Bimcoin. We are excited that you have chosen to be part of this great community. Please, click the button below to verify your email.')
            ->action('Verify Email', route('verify', ['email' => $this->user->email, 'token' => $this->token]));
    }

    /**
     * Get the array representation of the notification.
     *
     * @param  mixed $notifiable
     * @return array
     */
    public function toArray($notifiable)
    {
        return [
            //
        ];
    }
}

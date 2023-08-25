<?php

namespace App\Notifications;

use App\Models\Cart;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Notifications\Notification;
use Illuminate\Support\Facades\Log;

class NotifyUserNotification extends Notification
{
    use Queueable;

    /**
     * Create a new notification instance.
     */
    public $cart;
    public function __construct(Cart $cart)
    {
        $this->cart = $cart;

    }

    /**
     * Get the notification's delivery channels.
     *
     * @return array<int, string>
     */
    public function via(object $notifiable): array
    {
        return ['mail'];

    }

    /**
     * Get the mail representation of the notification.
     */
    public function toMail($notifiable): MailMessage
    {
        Log::info('Sending notification email');

        $cartId = $this->cart->id;



        return (new MailMessage)
            ->subject('Notification Title: Cart ID ' . $cartId) // Customize the subject
            ->line('Your order is being sent to u it will be there in 7 days.');

    }


    /**
     * Get the array representation of the notification.
     *
     * @return array<string, mixed>
     */
    public function toArray(object $notifiable): array
    {
        return [
            //
        ];
    }
}

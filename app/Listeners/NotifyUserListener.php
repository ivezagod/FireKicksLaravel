<?php

namespace App\Listeners;

use App\Models\User;
use App\Notifications\NotifyUserNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Log;

class NotifyUserListener
{
    /**
     * Create the event listener.
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     */
    public function handle(object $event): void
    {
        $cart = $event->cart;
        $user = auth()->user();
        $user->notify(new NotifyUserNotification($cart));

        Log::info('listener');

    }
}

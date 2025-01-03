<?php

namespace App\Listeners;

use App\Events\OrderCreated;
use App\Notifications\OrderCreatedNotification;
use Illuminate\Support\Facades\Notification;
use Illuminate\Support\Facades\Log;

class SendOrderCreatedNotification
{
    /**
     * Handle the event.
     */
    public function handle(OrderCreated $event): void
    {
        Notification::route('mail', [ $event->order->email => $event->order->full_name ])
            ->notify(new OrderCreatedNotification($event->order));
        Log::channel('user_actions')->info('Order created', ['order_id' => $event->order->id]);}
        
        
}

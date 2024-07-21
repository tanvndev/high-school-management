<?php

namespace App\Listeners;

use App\Events\AuthForgotEvent;
use App\Notifications\EmailResetPasswordNotification;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Notification;

class SendEmailResetPassword
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
    public function handle(AuthForgotEvent $event): void
    {
        Notification::send($event->user, new EmailResetPasswordNotification());
    }
}

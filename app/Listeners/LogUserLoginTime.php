<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use App\Models\LoginTime;
use Illuminate\Contracts\Queue\ShouldQueue;

class LogUserLoginTime implements ShouldQueue
{
    public function handle(UserLoggedIn $event)
    {
        LoginTime::create([
            'user_id' => $event->user->id,
            'login_time' => now(),
        ]);
    }
}


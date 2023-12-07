<?php

// app/Listeners/LogUserLoginTime.php

namespace App\Listeners;

use App\Events\UserLoggedIn;
use App\Models\LoginTime; // Make sure to import the LoginTime model
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


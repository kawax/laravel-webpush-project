<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Notification;
use App\Notifications\HelloNotification;
use App\User;

class SendUsersController extends Controller
{
    public function __invoke()
    {
        Notification::send(User::all(), new HelloNotification());
    }
}

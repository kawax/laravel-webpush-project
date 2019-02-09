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
        // 管理者のみ許可するならAuthServiceProviderで設定してここを有効化
        // $this->authorize('send-webpush');

        Notification::send(User::all(), new HelloNotification());
    }
}

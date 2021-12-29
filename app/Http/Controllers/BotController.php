<?php

declare(strict_types=1);

namespace App\Http\Controllers;

use WeStacks\TeleBot\TeleBot;
use Illuminate\Http\Request;

class BotController extends Controller
{
    public function __construct(private TeleBot $bot)
    {

    }

    public function bot(Request $request)
    {
        $this->bot->handleUpdate();
    }
}

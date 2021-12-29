<?php

declare(strict_types=1);

namespace App\Bot\KeyboardHandlers;

use App\Bot\Screens\Home;
use App\Models\Subscriber;
use Illuminate\Http\Request;
use WeStacks\TeleBot\Interfaces\UpdateHandler;
use WeStacks\TeleBot\Objects\Update;
use WeStacks\TeleBot\TeleBot;

class ExampleButton extends UpdateHandler
{
    public static function trigger(Update $update, TeleBot $bot)
    {
        return !empty($update->message) && !empty($update->message->text) && $update->message->text === trans("bot.buttons.home");
    }

    public function handle()
    {
        $screen = new Home();
        $screen->send($this);
    }
}

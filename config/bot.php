<?php

return [
    'token' => env('TELEGRAM_BOT_TOKEN'),
    'webhook' => env('TELEGRAM_BOT_WEBHOOK_URL', env('APP_URL').'/bot/'.env('TELEGRAM_BOT_TOKEN')),
    'handlers' => [
        \App\Bot\Commands\StartCommand::class,
    ],
    'db_enabled' => env('TELEGRAM_BOT_DB_ENABLED', false),
];

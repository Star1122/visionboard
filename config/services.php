<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, SparkPost and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
    ],

    'ses' => [
        'key' => env('SES_KEY'),
        'secret' => env('SES_SECRET'),
        'region' => 'us-east-1',
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'stripe' => [
        'model' => App\User::class,
        'key' => env('STRIPE_KEY'),
        'secret' => env('STRIPE_SECRET'),
    ],

    'twitter' => [
        'client_id' => '﻿4mq5PLlbf1bq4NhPbSv6mEI71',
        'client_secret' => '﻿MenJRM8NhqVVJdYQ99JkYT61OW3OHNemksWa3FbzADlspT3Mst',
        'redirect' => 'http://local.visionboard.com:8000/socialite/twitter/callback'
    ],

    'facebook' => [
        'client_id' => env('﻿841768146003073'),
        'client_secret' => env('﻿960ae09353178b18631b0f2409beeb6f'),
        'redirect' => env('http://local.visionboard.com:8000/socialite/facebook/callback')
    ],

    'google' => [
        'client_id' => '36457733320-vk7h27vhpg1lkjhnupns7blf09pud5v9.apps.googleusercontent.com',
        'client_secret' => 'RPpWyZ7kFGEyaVZXnPEIugmN',
        'redirect' => 'http://local.visionboard.com:8000/socialite/google/callback'
    ]
];

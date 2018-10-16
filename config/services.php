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
        'client_id' => env('46p3li50ikvolfHwk9ZhtayUv'),        
        'client_secret' => env('BywjYQ3sOff0OpJOWwG801kEKYzWpKGKFQKtqL6sA3BNHHNhJp'),
        'redirect' => 'http://laravelapi.local/callback/twitter',
    ],

    // 46p3li50ikvolfHwk9ZhtayUv (API key)

    // BywjYQ3sOff0OpJOWwG801kEKYzWpKGKFQKtqL6sA3BNHHNhJp (API secret key)

    // 859074089822162944-P2AglIiA4CjS7O3dqOpyXZShrKN3Bel (Access token)

    // I8s2jaha7W1i9o9g5GoTuEsf59AKbbQzPXclDG46Zp9Ih (Access token secret)

    // Read and write (Access level)
    // 15909522

    'facebook' => [
        'client_id' => env('GITHUB_CLIENT_ID'),
        'client_secret' => env('GITHUB_CLIENT_SECRET'),
        'redirect' => 'http://your-callback-url',
    ],

];

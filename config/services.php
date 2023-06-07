<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, SparkPost and others. This file provides a sane default
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],

    'sparkpost' => [
        'secret' => env('SPARKPOST_SECRET'),
    ],

    'google_ads' => [
        'clientId' => env('GOOGLE_ADS_CLIENT_ID', ''),
        'clientSecret' => env('GOOGLE_ADS_CLIENT_SECRET', ''),
        'refreshToken' => env('GOOGLE_ADS_REFRESH_TOKEN', ''),
        'developerToken' => env('GOOGLE_ADS_DEVELOPER_TOKEN', ''),
        'loginCustomerId' => env('GOOGLE_ADS_LOGIN_CUSTOMER_ID', ''),
    ],

];

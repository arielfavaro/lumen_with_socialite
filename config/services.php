<?php

return [
    'facebook' => [
        'client_id' => env('FACEBOOK_CLIENT_ID'),
        'client_secret' => env('FACEBOOK_CLIENT_SECRET'),
        'redirect' => '/auth/facebook/callback', // If the redirect option contains a relative path, it will automatically be resolved to a fully qualified URL.
    ],
];

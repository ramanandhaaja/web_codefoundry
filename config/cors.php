<?php

return [

    'paths' => ['*', 'sanctum/csrf-cookie'],  // Specify the paths you want to allow CORS on

    'allowed_methods' => ['*'], // Allow all methods: GET, POST, PUT, DELETE, etc.

    'allowed_origins' => ['https://dashgrosir.flutterflow.app', *], // Allow requests from any origin, you can specify domains as well

    'allowed_origins_patterns' => [], // Use patterns if needed

    'allowed_headers' => ['*'], // Allow all headers, specify custom headers if needed

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false, // Set true if your application handles credentials (e.g., cookies)
];

<?php

$api_domain_url = "http://127.0.0.1:8000/";
$api_version_url = "api/v1/";
$api_path_url = $api_domain_url . $api_version_url;

$remote_api_url = "http://mschools.co.ke/api/v1/";

$remote_api_base_url = "http://mschools.co.ke/api2/";
//$remote_api_base_url = "http://localhost:6000/";

$remote_api_url2 = $remote_api_base_url . "v1/";

return [
    
    'error' => [
        'invalid_phone_number' => 'Please enter a valid phone number in any of these formats: <br>7XXXXXXXX,  <br>07XXXXXXXX, <br>2547XXXXXXXX, <br>+2547XXXXXXXX'
    ],
    'routes' => [
        'get_users_url' => $api_path_url . 'users/index',
        'create_user_url' => $api_path_url . 'users/create',
        'create_message_url' => $api_path_url . 'smsoutbox/create'
    ],
    'passport' => [
        'client_id' => env('PASSPORT_CLIENT_ID'),
        'client_secret' => env('PASSPORT_CLIENT_SECRET'),
        'login_url' => $api_domain_url . 'oauth/token',
        'user_url' => $api_domain_url . 'api/user'
    ],
    'oauth' => [
        'token_url' => $remote_api_base_url . "oauth/token",
        'username' => env('OAUTH_USERNAME'),
        'password' => env('OAUTH_PASSWORD'),
        'client_id' => env('OAUTH_CLIENT_ID'),
        'client_secret' => env('OAUTH_CLIENT_SECRET')
    ],
    'bulk_sms' => [ 
        'send_sms_url' => $remote_api_base_url . "api/sms/sendsms",
        'get_sms_data_url' => $remote_api_base_url . "api/sms/getaccount",
        'get_sms_inbox_url' => $remote_api_url . "get_sms_inbox",
        'get_sms_inbox' => $remote_api_url . "get_sms_inbox",
        'src' => env('BULK_SMS_SRC'),
        'usr' => env('BULK_SMS_USR'),
        'pass' => env('BULK_SMS_PASS'),
    ],
    'mpesa' => [
        'getpayments_url' => $remote_api_base_url . 'api/mpesa/getpayments',
    ]
];
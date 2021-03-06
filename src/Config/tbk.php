<?php

return [

    /*
    |--------------------------------------------------------------------------
    | App Key
    |--------------------------------------------------------------------------
    |
    | This value is the key of your tbk's application.
    |
    */

    'app_key' => env('TAO_BAO_KE_APP_KEY', ''),

    /*
    |--------------------------------------------------------------------------
    | App Secret
    |--------------------------------------------------------------------------
    |
    | This value is the secret of your tbk's application.
    |
    */

    'app_secret' => env('TAO_BAO_KE_APP_SECRET', ''),

    /*
    |--------------------------------------------------------------------------
    | Environment
    |--------------------------------------------------------------------------
    |
    | This value determines the "environment" your service is currently
    | running in. This may determine how you prefer to configure the
    | service your application utilizes. The avaliable value can be 'production' or 'sandbox'.
    |
    */

    'env' => 'production',

    /*
    |--------------------------------------------------------------------------
    | Timezone
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default timezone for your serivce, which
    | will be used by the PHP date and date-time functions.
    |
    */

    'timezone' => 'PRC',
];

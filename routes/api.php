<?php

use Dingo\Api\Routing\Router;
use Illuminate\Http\Request;

/** @var Router $api */
$api = app(Router::class);

$api->version('v1', function (Router $api) {
    
    /**
     * /auth/
     */
    $api->group(['prefix' => '/session', 'namespace'=>'App\\Api\\V1\\Controllers'], function(Router $api) {
        $api->get('/refresh',  'LoginController@token');
        $api->post('/login', 'LoginController@login');
        $api->post('/signup', 'SignUpController@signUp');
        $api->post('/recovery', 'ForgotPasswordController@sendResetEmail');
        $api->post('/reset', 'ResetPasswordController@resetPassword');
    });
    
    $api->group(['prefix'=> '/', 'middleware'=> 'jwt.auth', 'namespace'=>'App\\Http\\Controllers'], function(Router $api) {
        $api->get('/', 'MainController@index');
    });
    

});

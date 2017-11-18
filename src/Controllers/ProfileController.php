<?php

namespace App\Controllers;

class ProfileController
{
    public function index($request, $response, $args)
    {
        $dotenv = new \Dotenv\Dotenv('./');
        $dotenv->load();
        $app_id = getenv('FACEBOOK_APP_ID');
        $app_secret = getenv('FACEBOOK_APP_SECRET');
        return $app_id;
    }
}

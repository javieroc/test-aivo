<?php

namespace App\Controllers;

use GuzzleHttp\Psr7;
use GuzzleHttp\Exception\RequestException;

class ProfileController
{
    public function index($request, $response, $args)
    {
        $access_token = getenv('FACEBOOK_ACCESS_TOKEN');
        $user = $args['user'] ? $args['user'] : '123456';

        $client = new \GuzzleHttp\Client();
        try {
            $body = $client->request('GET', 'https://graph.facebook.com/v2.11/' . $user, [
                'query' => [
                    'fields' => 'id,first_name,last_name',
                    'access_token' => $access_token,
                ]
            ])->getBody();

            $obj = json_decode($body);

            return $response->withStatus(200)->withJson($obj);
        } catch (RequestException $e) {
            echo Psr7\str($e->getRequest());
            if ($e->hasResponse()) {
                echo Psr7\str($e->getResponse());
            }
        }
    }
}

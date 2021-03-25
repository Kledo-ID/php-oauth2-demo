<?php

require 'load.php';

use GuzzleHttp\Client;
use Josantonius\Session\Session;

if (Session::get('oauth2') === null) {
    header('Location: ./index.php');

    exit();
}

$client = new Client();

try {
    $response = $client->post($_ENV['API_HOST'].'/oauth/token', [
        'form_params' => [
            'grant_type' => 'refresh_token',
            'refresh_token' => get_refresh_token(),
            'client_id' => $_ENV['CLIENT_ID'],
            'client_secret' => $_ENV['CLIENT_SECRET'],
            'scope' => '',
        ],
    ]);

    $oauth2 = json_decode((string) $response->getBody(), true, 512, JSON_THROW_ON_ERROR);

    set_token(
        $oauth2['token_type'],
        $oauth2['access_token'],
        $oauth2['refresh_token'],
        $oauth2['expires_in']
    );

    header('Location: '.'./get.php');
} catch (\GuzzleHttp\Exception\GuzzleException $e) {
    exit('Error when sending request.');
} catch (JsonException $e) {
    exit('Invalid parsing json.');
}

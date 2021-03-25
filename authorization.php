<?php

require 'load.php';

use Josantonius\Session\Session;

$state = random_string(40);

Session::set('state', $state);

$query = http_build_query([
    'client_id' => $_ENV['CLIENT_ID'],
    'redirect_uri' => $_ENV['REDIRECT_URI'],
    'response_type' => 'code',
    'scope' => '',
    'state' => $state,
]);

$authorizationUrl = $_ENV['API_HOST'].'/oauth/authorize?'.$query;

header('Location: '.$authorizationUrl);

exit();

<?php

require __DIR__.'/vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$clientId = $_ENV['CLIENT_ID'];
$clientSecret = $_ENV['CLIENT_SECRET'];
$redirectUri = $_ENV['REDIRECT_URI'];

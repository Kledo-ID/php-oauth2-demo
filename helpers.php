<?php

use Josantonius\Session\Session;

if (! function_exists('random_string')) {
    /**
     * Generate a more truly "random" alpha-numeric string.
     *
     * @param  int  $length
     * @return string
     * @throws Exception
     */
    function random_string($length = 16): string
    {
        $string = '';

        while (($len = strlen($string)) < $length) {
            $size = $length - $len;

            $bytes = random_bytes($size);

            $string .= substr(str_replace(['/', '+', '='], '', base64_encode($bytes)), 0, $size);
        }

        return $string;
    }
}

if (! function_exists('set_token')) {
    /**
     * Store token details to session.
     *
     * @param  string  $tokenType
     * @param  string  $accessToken
     * @param  string  $refreshToken
     * @param  string  $expiresIn
     * @return void
     */
    function set_token(string $tokenType, string $accessToken, string $refreshToken, string $expiresIn): void
    {
        Session::set('oauth2', [
            'token_type' => $tokenType,
            'access_token' => $accessToken,
            'refresh_token' => $refreshToken,
            'expires_in' => $expiresIn,
        ]);
    }
}

if (! function_exists('get_access_token')) {
    /**
     * Get the access token.
     *
     * @return string
     */
    function get_access_token(): string
    {
        return Session::get('oauth2')['access_token'];
    }
}

if (! function_exists('get_refresh_token')) {
    /**
     * Get the refresh token.
     *
     * @return string
     */
    function get_refresh_token(): string
    {
        return Session::get('oauth2')['refresh_token'];
    }
}

if (! function_exists('is_collapsed')) {
    function is_collapsed($key)
    {
        if ((isset($_GET['request']) && $_GET['request'] === $key)
            || (isset($_GET['code']) && $_GET['code'] === $key)
        ) {
            echo 'show';
        }

        echo '';
    }
}

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
    function set_token($tokenType, $accessToken, $refreshToken, $expiresIn)
    {
        Session::set('oauth2', [
            'token_type' => $tokenType,
            'access_token' => $accessToken,
            'refresh_token' => $refreshToken,
            'expires_in' => $expiresIn,
        ]);
    }
}

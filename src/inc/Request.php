<?php

namespace YtCheck\Inc;

class Request
{
    /**
     * Curl request.
     *
     * 
     * @param String $id Id of a youtube video
     * @throws null
     * @return String $body
     */
    public static function get(String $url)
    {
        $curl = curl_init($url);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_NOSIGNAL, 1);
        curl_setopt($curl, CURLOPT_TIMEOUT_MS, 5000);

        $body = curl_exec($curl);

        curl_close($curl);

        return $body;
    }
}
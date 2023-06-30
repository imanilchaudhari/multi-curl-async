<?php

namespace Demo;

class SingleCurl
{
    public static function process($urls)
    {
        $response = [];
        foreach ($urls as $url) {
            $curl = curl_init($url);

            curl_setopt_array($curl, array(
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_TIMEOUT => 10,
                CURLOPT_CONNECTTIMEOUT => 10,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_SSL_VERIFYPEER => false,
            ));

            $request = curl_exec($curl);

            curl_close($curl);
            $response[] = $request;
        }

        return $response;
    }
}

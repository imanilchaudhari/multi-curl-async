<?php

namespace Demo;

class MultiCurl
{
    public static function process($urls)
    {
        $mh = curl_multi_init();

        $requests = [];
        foreach ($urls as $i => $url) {
            $requests[$i] = curl_init($url);
            curl_setopt($requests[$i], CURLOPT_RETURNTRANSFER, true);
            curl_setopt($requests[$i], CURLOPT_TIMEOUT, 10);
            curl_setopt($requests[$i], CURLOPT_CONNECTTIMEOUT, 10);
            curl_setopt($requests[$i], CURLOPT_SSL_VERIFYHOST, false);
            curl_setopt($requests[$i], CURLOPT_SSL_VERIFYPEER, false);
            curl_multi_add_handle($mh, $requests[$i]);
        }

        $active = null;
        do {
            curl_multi_exec($mh, $active);
        } while ($active);


        $response = [];
        foreach ($requests as $request) {
            $response[] = curl_multi_getcontent($request);
            curl_multi_remove_handle($mh, $request);
            curl_close($request);
        }

        curl_multi_close($mh);

        return $response;
    }
}

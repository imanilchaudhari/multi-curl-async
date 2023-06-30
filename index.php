<?php

require __DIR__.'/vendor/autoload.php';

use Demo\SingleCurl;
use Demo\MultiCurl;

$urls = [
    'https://api.genderize.io?name=anil',
    'https://api.genderize.io?name=anil',
    'https://api.genderize.io?name=anil',
    'https://api.genderize.io?name=anil',
    'https://api.genderize.io?name=anil',
    'https://api.genderize.io?name=anil',
    'https://api.genderize.io?name=anil',
    'https://api.genderize.io?name=anil',
    'https://api.genderize.io?name=anil',
    'https://api.genderize.io?name=anil',
];

echo "SIMPLE START : " . date('H:i:s') . PHP_EOL;
$sresponse = SingleCurl::process($urls);
echo "SIMPLE END : " . date('H:i:s') . PHP_EOL;

echo "MULTI START : " . date('H:i:s') . PHP_EOL;
$mresponse = MultiCurl::process($urls);
echo "MULTI END : " . date('H:i:s') . PHP_EOL;

print_r($sresponse);
print_r($mresponse);
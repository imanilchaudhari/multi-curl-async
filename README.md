Single Curl vs. Multi Curl
==========================
```PHP
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

echo "SINGLE START : " . date('i:s') . PHP_EOL;
$sresponse = SingleCurl::process($urls);
echo "SINGLE END : " . date('i:s') . PHP_EOL;

echo "MULTI START : " . date('i:s') . PHP_EOL;
$mresponse = MultiCurl::process($urls);
echo "MULTI END : " . date('i:s') . PHP_EOL;
```


Output
========
```
SINGLE START : 21:45
SINGLE END : 21:53
MULTI START : 21:53
MULTI END : 21:54
```

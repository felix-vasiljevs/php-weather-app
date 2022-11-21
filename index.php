<?php

require_once 'vendor/autoload.php';

use App\ApiClient;

$apiKey = 'f6860ecc5d781f1a12003161a1ecac04';

$apiClient = new ApiClient($apiKey);

$citySelection = readline("Type a city name you are looking for: ");

$weather = $apiClient->getWeather($citySelection);

echo "Currently in {$weather->getLocationName()} is {$weather->getTemperature()} (feels like {$weather->getFeelsLike()})/ ({$weather->getHumidity()}%) and the wind speed is {$weather->getWind()} m/s" . PHP_EOL;

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

</body>
</html>

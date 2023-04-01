<?php

require '../vendor/autoload.php';

use PhpStock\HereApi\Geocode;
use PhpStock\HereApi\Suggest;

$apiKey = '';

$suggest = $_GET['suggest'] ?? null;

$geocode = $_GET['geocode'] ?? null;

if ($suggest) {
    $result = new Suggest($apiKey, $suggest);

    echo "<pre>" . print_r($result->toArray(), true) . "</pre>";
}

if ($geocode) {
    $result = new Geocode($apiKey, $geocode);

    echo "<pre>" . print_r($result->toArray()['Location'] ?? 'Invalid location ID', true) . "</pre>";
}

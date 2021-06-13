<?php

include 'vendor/autoload.php';

use PanduanVIP\AGC\AGCImage;

$keyword = 'sepatu roda';
$results = json_decode(AGCImage::get(['YahooImage'], $keyword));

echo '<pre>';
print_r($results);
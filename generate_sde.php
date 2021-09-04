<?php

$sde_name = 'sde-20210713-TRANQUILITY';

$data = [
    'version'   => $sde_name,
    'url'       => 'https://www.fuzzwork.co.uk/dump/:version/',
    'format'    => '.sql.bz2',
    'tables'    => [
        "invCategories",
        "invNames",
        "invTypes",
        "mapDenormalize",
        "mapSolarSystemJumps",
        "staStations",
    ],
];

$file = __DIR__ ."/sde.json";
$sde = json_encode($data).PHP_EOL;
file_put_contents($file, $sde, LOCK_EX);

<?php
$babyData = json_decode(file_get_contents(__DIR__ . '/Stages/Baby.json'), true);
$babyIIData = json_decode(file_get_contents(__DIR__ . '/Stages/Baby-II.json'), true);
$childData = json_decode(file_get_contents(__DIR__ . '/Stages/Child.json'), true);
$adultData = json_decode(file_get_contents(__DIR__ . '/Stages/Adult.json'), true);
$perfectData = json_decode(file_get_contents(__DIR__ . '/Stages/Perfect.json'), true);
$ultimateData = json_decode(file_get_contents(__DIR__ . '/Stages/Ultimate.json'), true);
$superUltimateData = json_decode(file_get_contents(__DIR__ . '/Stages/SuperUltimate.json'), true);

$dim = new Dim(
  'Gammamon',
  'BE',
  [
    $babyData,
    $babyIIData,
    $childData,
    $adultData,
    $perfectData,
    $ultimateData,
    $superUltimateData
  ]
);
?>
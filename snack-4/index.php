<?php
$numbers = [];
while (count($numbers) < 15) {
    $singleNumber = rand(1, 50);
    while (in_array($singleNumber, $numbers)) {
        $singleNumber = rand(1, 50);
    }
    $numbers[] = $singleNumber;
}
var_dump($numbers);
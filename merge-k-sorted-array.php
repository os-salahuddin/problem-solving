<?php
$data = [
    [3,2,1],
    [6,5,4]
];

$allItems = [];
$loop = 0;
foreach ($data as $item=> $array) {
    $allItems[] = $array[$loop];
    $loop++;
}

sort($allItems);

print_r($allItems);
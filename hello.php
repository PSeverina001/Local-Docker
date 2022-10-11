<?php

$a = 3;
$b = 4;
echo abs($a - $b) . "\n";

$array = [1, 2, -1, -2, 3, -3];
$newArr = [];
foreach ($array as $num)
{
	$newArr[] = abs($num);
}
print_r($newArr) . "\n";

<?php

$str = '1234567890';
$arr = str_split($str, 2);
$sum = 0;
for ($i = 0; $i < count($arr); $i++)
{
	$sum += $arr[$i];
}
echo $sum . "\n";

<?php

//задача1
$dividers = [1];
$num = 27;
for ($i = 2; $i <= $num; $i++)
{
	if ($num % $i === 0)
	{
		$dividers[] = $i;
	}
}
print_r($dividers);

//задача2
$count = 0;
$sum = 0;
$array = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
foreach ($array as $value)
{
	$sum += $value;
	$count++;
	if ($sum > 10)
	{
		echo $count . "\n";
		break;
	}
}

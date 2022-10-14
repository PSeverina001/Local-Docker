<?php

$arr = [[]];
$dimension=3;
for ($i = 0; $i < $dimension; $i++)
{
	for ($j = 0; $j < $dimension; $j++)
	{
		$arr[$i][$j]=$i*$dimension+$j+1;
	}
}
print_r($arr);

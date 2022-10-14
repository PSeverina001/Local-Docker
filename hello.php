<?php

function sumElements(array $arr, $index = 0)
{
	$sum=$arr[$index];
	if ($index !== count($arr))
	{
		$sum+=sumElements($arr, $index + 1);
	}
	return $sum;
}

$my_array=[1,2,3,4,5,6];
echo sumElements($my_array)/count($my_array);


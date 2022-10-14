<?php

function arrayFill($element, $count) : array
{
	$arr=[];
	for ($i = 0; $i < $count; $i++)
	{
		$arr[$i].=$element;
	}
	return $arr;
}
$arr=arrayFill('x',5);
print_r($arr);

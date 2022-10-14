<?php

$dimension = 5; //размерность массива
$arr = [];
for ($i = 0; $i < $dimension; $i++)
{
	$element = null;
	for ($j = 0; $j < $i + 1; $j++)
	{
		$element .= "x";
	}
	$arr[$i] = $element;
}
print_r($arr);

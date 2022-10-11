<?php

echo rand(1, 100) . "\n";

$array = array();
for ($i = 0; $i < 10; $i++)
{
	$array[]=rand(1,100);
}
print_r($array);

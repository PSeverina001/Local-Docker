<?php

$st=pow(2, 10);
echo $st . "\n";

$radical=sqrt(245);
echo $radical , "\n";

$array=[4,2,5,19,13,0,10];
$sum=0;
foreach ($array as $num){
	$sum+=pow($num,2);
}
echo sqrt($sum) . "\n";
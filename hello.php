<?php

$radical=sqrt(379);
echo "До целых: " . round($radical,0) . "\n";
echo "До десятых: " . round($radical,1) . "\n";
echo "До сотых: " . round($radical,2) . "\n";

$value = sqrt(587);
$array=["floor" => floor($value), "ceil" => ceil($value)];
print_r($array);

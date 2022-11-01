<?php

$str='ahb acb adca aeb aeeb abba adcb axeb';
$regexp='/a(dc|b[eb])a/';
$matches = array();

preg_match_all($regexp, $str, $matches);
var_dump($matches);

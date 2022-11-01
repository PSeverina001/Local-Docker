<?php

function cube($matches)
{
	$pow = pow($matches[0],3);
	return $pow;
}

$str='a1b2c3';
$regexp='/[0-9]/';

echo preg_replace_callback($regexp, 'cube', $str);

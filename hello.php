<?php

function sumFrom1to100($start=1, $end = 100)
{
	$sum = $start;
	if ($start !== $end)
	{
		$sum += sumFrom1to100($start+1, $end);
	}
	return $sum;
}

echo sumFrom1to100();


<?php

function sumMoreTen($a, $b): bool
{
	if ($a + $b > 10)
	{
		return true;
	}
	else
	{
		return false;
	}
}

function equalNumber($a, $b): bool
{
	if ($a === $b)
	{
		return true;
	}
	else
	{
		return false;
	}
}

echo $test = 0 ? "верно" : "ложь" . "\n";

$age = 76;
if ($age >= 10 and $age <= 99)
{
	$sum = 0;
	while ($age > 0)
	{
		$sum += $age % 10;
		$age /= 10;
	}
	if ($sum <= 9)
	{
		echo "сумма цифр однозначна!" . "\n";
	}
	else
	{
		echo "сумма цифр двузначна!" . "\n";
	}
}
else
{
	echo "число меньше 10 и больше 99" . "\n";
}

$arr = [1, 4, 7];
if (count($arr) === 3)
{
	$sum = 0;
	for ($i = 0; $i < count($arr); $i++)
	{
		$sum += $arr[$i];
	}
	echo "сумма элементов массива = " . $sum;
}

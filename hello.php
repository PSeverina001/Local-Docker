<?php

function increaseEnthusiasm(string $message): string
{
	return $message . "!";
}

function repeatThreeTimes(string $message): string
{
	for ($i = 0; $i < 2; $i++)
	{
		$message .= $message;
	}

	return $message;
}

function cut(string $message, int $cutNum = 10): string
{
	$cutMessage = "";
	for ($i = 0; $i < $cutNum; $i++)
	{
		$cutMessage .= $message[$i];
	}

	return $cutMessage;
}

function printArray(array $arr, $index = 0): void
{
	echo $arr[$index] . " ";
	if ($index !== count($arr))
	{
		printArray($arr, $index + 1);
	}
	else
	{
		echo "\n";
	}
}

function sumNumber($num)
{
	$sum = $num % 10;
	if ($num / 10 > 0)
	{
		$sum += sumNumber($num / 10);
	}

	return $sum;
}

$my_message = "Hello";
echo increaseEnthusiasm($my_message) . "\n";
echo repeatThreeTimes($my_message) . "\n";
echo increaseEnthusiasm(repeatThreeTimes($my_message)) . "\n";
echo cut(repeatThreeTimes($my_message)) . "\n";

$my_arr = [1, 2, 3, 4, 5, 6, 7];
printArray($my_arr);

$my_value = 145;
$result = sumNumber(($my_value));
while ($result > 9)
{
	$result = sumNumber($result);
}
echo $result;

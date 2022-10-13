<?php

function printStringReturnNumber(): int
{
	echo "Your number is ";

	return rand(1, 100);
}

$my_num = printStringReturnNumber();
echo $my_num;

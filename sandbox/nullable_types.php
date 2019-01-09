<?php

// this defines 2 mandatory arguments where the 2nd arg can be EITHER int OR null
function add(int $a, ?int $b)
{
	return $a + $b;
}

echo add(1, 1);
echo PHP_EOL;

echo add(1, NULL);
echo PHP_EOL;

echo add(1);
echo PHP_EOL;


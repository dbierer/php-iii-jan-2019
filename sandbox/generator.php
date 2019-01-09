<?php

function iterateSomething1($max)
{
    $output = [];
    for ($x = 0; $x < $max; $x++) {
		$output[] = $x;
    }
    return $output;
}

function iterateSomething2($max)
{
    for ($x = 0; $x < $max; $x++) {
		yield $x;
    }
}

var_dump(iterateSomething1(10));
var_dump(iterator_to_array(iterateSomething2(10)));

$generate = iterateSomething2(10);
var_dump($generate);

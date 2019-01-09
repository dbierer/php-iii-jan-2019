<?php

$anon = function ($days) {
	$date = new DateTime('now');
	$date->add(new DateInterval('P' . $days . 'D'));
	return $date->format('Y-m-d');
};

echo $anon(30);
var_dump($anon);

/*
class Closure
{
	public function __invoke($days)
	{
		$date = new DateTime('now');
		$date->add(new DateInterval('P' . $days . 'D'));
		return $date->format('Y-m-d');
	}
}
 */

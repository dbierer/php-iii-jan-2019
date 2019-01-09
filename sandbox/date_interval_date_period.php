<?php

// Generate a range of dates using a period
$now = new DateTime('now');
$int = new DateInterval('P30D');
$period = new DatePeriod($now, $int, 12);

foreach ($period as $date) {
    echo $date->format('Y-M-d (l)') . PHP_EOL;
}
echo PHP_EOL;

// Generate a range of dates using a period
$now = new DateTimeImmutable('now');
// TODO: looks like this isn't working ... will rework and repost ... sorry guys!!!
$int = DateInterval::createFromDateString('first tuesday of every month');
$period = new DatePeriod($now, $int, 12);

foreach ($period as $date) {
    echo $date->format('Y-M-d (l)') . PHP_EOL;
}
echo PHP_EOL;





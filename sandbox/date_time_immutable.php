<?php
$interval = new DateInterval('P90D');
// shows default behavior
$date1 = new DateTime('now');
$date2 = $date1->add($interval);

// immutable doesn't change the original
$date3 = new DateTimeImmutable('now');
$date4 = $date3->add($interval);

// shows the timezone usage
$date5 = new DateTimeImmutable('now', new DateTimeZone('UTC'));
$date6 = $date5->add($interval);

// diff between instances
$diff1 = $date3->diff($date6);
$diff2 = $date6->diff($date3);

echo '<pre>';
echo $date1->format('Y-m-d H:i:s') . PHP_EOL;
echo $date2->format('Y-m-d H:i:s') . PHP_EOL;
echo $date3->format('Y-m-d H:i:s') . PHP_EOL;
echo $date4->format('Y-m-d H:i:s') . PHP_EOL;
echo $date5->format('Y-m-d H:i:s') . PHP_EOL;
echo $date6->format('Y-m-d H:i:s') . PHP_EOL;

echo PHP_EOL;
var_dump($diff1);
echo PHP_EOL;
var_dump($diff2);

echo '</pre>';



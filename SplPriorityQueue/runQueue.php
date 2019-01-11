<?php
require __DIR__ . '/../../../../vendor/autoload.php';
use src\ModSPL\StandardDatastructures\SplPriorityQueue\{Event, EventManager};

$eventManager = new EventManager();

// Build some callbacks
$preCheck = function (Event $e){ echo 'preCheck:' . $e->getName() . PHP_EOL; };
$statusCheck = function (Event $e){ echo 'statusCheck: ' . $e->getName() . PHP_EOL; };
$checkComplete = function (Event $e){ echo 'Ignition -- Let\'s go!'; };

// Attach prioritized listeners--priority assigned as needed. Change priorities and watch the calls change.
$eventManager->attach('onCheck', $preCheck, 1);
$eventManager->attach('onCheck', $checkComplete, 3);
$eventManager->attach('onCheck', $statusCheck, 2);

// Build some callbacks
$test1 = function (Event $e){ echo 'test 1:' . $e->getName() . PHP_EOL; };
$test2 = function (Event $e){ echo 'test 2: ' . $e->getName() . PHP_EOL; };

// Attach prioritized listeners--priority assigned as needed. Change priorities and watch the calls change.
$eventManager->attach('test', $test1, 1);
$eventManager->attach('test', $test2, 2);

// Just before check start, trigger pre stage
echo "\nonCheck\n";
$eventManager->trigger('onCheck');
echo PHP_EOL;

echo "\nTest\n";
$eventManager->trigger('test');



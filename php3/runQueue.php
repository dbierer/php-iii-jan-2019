<?php
require __DIR__ . '/PSR4Loader.php';
PSR4Loader::init([__DIR__]);

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
$test1 = function (Event $e){ echo 'test 1' . PHP_EOL; };
$test2 = function (Event $e){ echo 'test 2' . PHP_EOL; };
$test3 = function (Event $e){ echo 'test 3' . PHP_EOL; };
$test4 = function (Event $e){ echo 'test 4' . PHP_EOL; };

// Attach prioritized listeners--priority assigned as needed. Change priorities and watch the calls change.
$eventManager->attach('test', $test1, 2);
$eventManager->attach('test', $test2, 1);
$eventManager->attach('test', $test3, 4);
$eventManager->attach('test', $test4, 3);

// Just before check start, trigger pre stage
echo "\n-------------------\n";
echo "onCheck\n";
echo "-------------------\n";
$eventManager->trigger('onCheck');
echo PHP_EOL;

echo "\n-------------------\n";
echo "Test\n";
echo "-------------------\n";
$eventManager->trigger('test');



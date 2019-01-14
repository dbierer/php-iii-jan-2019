<?php

try {
	$pdo = new PDO('bad','arguments');
} catch (Exception $e) {
	echo get_class($e) . ':' . $e . PHP_EOL;
}

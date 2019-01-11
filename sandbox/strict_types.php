<?php
// allows data to pass without throwing an error
// but filters the data through a type cast

// uncomment the statement below, data types are enforced
//declare(strict_types=1);

function test(int $b, float $c, string $a)
{
	return var_export([$b, $c, $a], TRUE);
}

// generates warning
$result = 'String' + 14;

try {
	echo test(1,2,3);			// works OK
	echo test('1', 2, 3);		// works OK: '1' is converted to (int) 1
	echo test('String', 2, 3);	// throws error
} catch (Error $e) {
	echo PHP_EOL;
	echo get_class($e) . ':' . $e->getMessage();
}

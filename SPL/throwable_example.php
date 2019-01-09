<?php

interface TestInterface
{
	const TEST = 'This is a test' . PHP_EOL;
	public function test(array $array);
}

class TestClass implements TestInterface
{
	// this is not allowed:
	// const TEST = 'This is NOT a test' . PHP_EOL;
	public function test($array)
	{
		if (!is_array($array)) throw new Exception('Argument must be an array');
		return array_sum($array);
	}
}

$test = new TestClass();
// interface constant inherits into the object instance
echo $test::TEST;
echo $test->test(range(1,15));

try {
	echo $test->test('Not an array');
} catch (Throwable $e) {
	echo get_class($e) . ':' . $e->getMessage();
}


<?php

function top(callable $whatever)
{
	return $whatever();
}

class TestClass
{
	public function someMethod()
	{
		return 'Array';
	}
}

$callable = [
	'array' => [new TestClass(), 'someMethod'],
	'func'  => function () { return 'Anon'; },
	'class' => new class () { public function __invoke() { return 'Class'; } },
];

foreach ($callable as $key => $value) {
	echo top($value) . PHP_EOL;
}

<?php

$anon = new class () {
	public function __invoke()
	{
		return new class{
			public function timesTen($element)
			{
				return $element * 10;
			}
		};
	}
};

function tenFactorProcedural($element)
{
    return timesTen($element);
}

function timesTen($element) {
    return $element * 10;
}

echo $anon()->timesTen(10);
echo PHP_EOL;
echo tenFactorProcedural(10);

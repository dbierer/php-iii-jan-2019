<?php

function talkToMe1($a) : string
{
	return 'I am talking you are listening. End of story. ' . $a . PHP_EOL;
}

function talkToMe2($a) : void
{
	return 'I am talking you are listening. End of story. ' . $a . PHP_EOL;
}

echo talkToMe1('JR');
echo talkToMe2('JR');

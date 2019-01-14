<?php

$path = realpath('/home/vagrant/php-iii-jan-2019');

$objects = new RecursiveIteratorIterator(
				new RecursiveDirectoryIterator($path), 
				RecursiveIteratorIterator::SELF_FIRST);
foreach($objects as $name => $object) echo "$name\n";


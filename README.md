# PHP III - Jan 2019

file:///D:/Repos/PHP-Fundamentals-III/Course_Materials/index.html#/5/7

## Q & A
* Q: What is meant by "interned_strings_buffer" ? (OpCache)
* A:
* Q: Where does APC store its cache data?
* A:

* Q: Will APC interfere with OpCache?
* A:

* Q: Is APC included with PHP?
* A:

* Q: Is there a good example of delegating generator?
* A: https://github.com/dbierer/php7_examples/blob/master/php_7_0/generator_delegation_words.php

* Q: Is there an example of doubly linked list?
* A: See: https://github.com/dbierer/php7cookbook/blob/master/source/chapter10/chap_10_linked_double.php

* Q: How do you run PHP in a Windows BAT file?
* A: First of all, make sure the PHP executable is in your PATH
    * See: https://stackoverflow.com/questions/12870880/run-php-file-in-windows-cmd
    * Then all you need to do is to enter the following inside your `*.bat` file:
```
php c:\path\to\script.php
```

## Homework
* For Fri 18 Jan 2019
    * Lab: Extension Custom Development
    * Lab: Installing Customized PHP From Source Lab
        * List of `./configure` option flags: http://php.net/manual/en/configure.about.php
        * Another example: https://github.com/dbierer/php7_examples#manual-php-7-installation

* For Wed 16 Jan 2019
    * Built-in Web Server Lab
    * Script to run the built-in web server:
```
php -S localhost:8080
```
* For Wed 9 Jan 2019
    * Lab: Setting up Apache Jmeter
    * Lab: Setting up the Jenkins CI
## ERRATA
* runTransactionModel doesn't seem to work
* file:///D:/Repos/PHP-Fundamentals-III/Course_Materials/index.html#/3/12: EventManager needs to be rewritten (see repo for rewrites)
* file:///D:/Repos/PHP-Fundamentals-III/Course_Materials/index.html#/3/42: use the autoloader to avoid the 3rd `require` statement
```
// runLoader.php in the SPL Functions area in the VM
$config = require 'config.php';
require 'PSR4Loader.php';
// Init the autoloader
$loader = new \src\ModSPL\Functions\PSR4Loader;
$loader->init($config);

use src\ModSPL\Functions\Controllers\FrontController;

$controller = new FrontController();
$view = $controller->init($config);

$view->render();
```

## Class Notes
* DateTime formats
    * `j` == day of month _without_ leading zeros
    * `n` == month number _without_ leading zeros
* DateTime use cases
    * You could also use the `diff()` method to compare two DateTime instances
* Future roadmap for the PHP language: https://wiki.php.net/rfc
* PHP CLI
    * `-r` == runtime lets you run single commands
    * `-l` == PHP 'lint' == syntax checking
    * `-v` == PHP version
* Streams
    * http://php.net/manual/en/book.stream.php
    * http://php.net/manual/en/wrappers.php
    * Example of PSR-7 StreamInterface class which uses PHP strings to read/write
        * https://github.com/dbierer/php7cookbook/blob/master/source/Application/MiddleWare/TextStream.php
    * Buckets: https://stackoverflow.com/questions/27103269/what-is-a-bucket-brigade#31132646

## Resources
* Examples from past PHP III classes:
    * https://github.com/dbierer/php-iii-jul-2018

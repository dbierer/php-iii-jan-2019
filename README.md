# PHP III - Jan 2019

file:///D:/Repos/PHP-Fundamentals-III/Course_Materials/index.html#/3/25

## TODO
* Find a better example of delegating generator
* Pull examples of doubly links list into the repo
* Pull example of priorityQueue into the repo
* How do you run PHP in a Windows BAT file?

## Homework
* For Wed 16 Jan 2018
    * Built-in Web Server Lab
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
## Resources
* Examples from past PHP III classes:
    * https://github.com/dbierer/php-iii-jul-2018

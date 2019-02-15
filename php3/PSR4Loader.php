<?php

class PSR4Loader
{
    protected static $config;
    public static function init($config)
    {
        self::$config = $config;
        spl_autoload_register('PSR4Loader::autoload', true, true);
    }
    public static function autoload($class) 
    {
        $success = FALSE;
        $file = str_replace('\\', DIRECTORY_SEPARATOR, $class) . '.php';
        if (isset(self::$config['autoloaderpaths'])) {
            foreach(self::$config['autoloaderpaths'] as $path) {
                $loadFile = $path . DIRECTORY_SEPARATOR . $file;
                $loadFile = str_replace(['\\\\','//'],['\\','/'], $loadFile);
                if (self::tryLoad($loadFile)) {
                    $success = TRUE;
                    break;
                }
            }
        } else {
            $success = self::tryLoad($file);
        }            
        return $success;
    }
    protected static function tryLoad($loadFile)
    {
        $success = FALSE;
        if(file_exists($loadFile)){
            require_once $loadFile;
            $success = TRUE;
        }
        return $success;
    }
}

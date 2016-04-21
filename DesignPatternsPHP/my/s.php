<?php


class Loader
{
    /**
     * 自动加载类
     * @param $class 类名
     */
    public static function autoload($class)
    {

        $path = dirname(dirname(dirname(__FILE__)))."/".$class.".php";

        $path = str_replace("\\","/",$path);

        echo file_exists($path);

        include_once($path);
    }

    public static function autoloadP($class){
        $path = dirname(__FILE__)."/".$class.".php";

        echo $path;

        include_once $path;
    }

}
/**
* sql自动加载
*/
spl_autoload_register(array('Loader', 'autoloadP'));

//$dog = new DesignPatternsPHP\my\foo();
$dog  = new loo();

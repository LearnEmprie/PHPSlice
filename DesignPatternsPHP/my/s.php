<?php


use DesignPatternsPHP\my\foo;


function __autoload( $class ) {

    $file = dirname(dirname(dirname(__FILE__)))."\\".$class . '.php';
    if ( is_file($file) ) {
        require_once($file);
    }
}


$dog = new foo();
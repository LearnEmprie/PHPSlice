<?php

$obj = (object) array('foo' => 'bar', 'property' => 'value');

echo $obj->foo;
echo $obj->property; // prints 'value'


class Foo {
    public $aMemberVar = 'aMemberVar Member Variable';
    public $aFuncName = 'aMemberFunc';


    function aMemberFunc() {
        print 'Inside `aMemberFunc()`';
    }
}


$dog = new Foo();
$pig = new Foo();

$dog->aMemberVar = 1;

echo $dog->aMemberVar;
echo $pig->aMemberVar;

echo str_repeat("-",10).PHP_EOL;



//记录关闭,即便关闭了也能找到错误原因.
function shutdown_function()
{
    $e = error_get_last();
    print_r($e);
}
register_shutdown_function('shutdown_function');



class MyDestructableClass {
    function __construct() {
        print "In constructor\n";
        $this->name = "MyDestructableClass";
    }

    function Dogx(){
        require "a";
    }

    function __destruct() {
        print "Destroying " . $this->name . "\n";
    }
}

$obj = new MyDestructableClass();
$obj->Dogx();
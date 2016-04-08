<?php
namespace DesignPatterns\Creational\Pool\Tests;
use DesignPatterns\Creational\Pool;


include_once("Pool.php");
include_once("TestWorker.php");

class PoolTest
{
    public function testPool()
    {

        $pool = new Pool(new TestWorker());



    }
}


$dog = new PoolTest();
$dog->testPool();
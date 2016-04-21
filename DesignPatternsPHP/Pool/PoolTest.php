<?php

include_once("Pool.php");
include_once("Worker.php");
include_once("Processor.php");

class PoolTest
{
    public function testPool()
    {
        $pool = new Pool("TestWorker");

        for($i = 0 ; $i <100 ; $i ++){
            $dog[] = $pool->get();
        }

        for($i = 0 ; $i <100 ; $i ++){
            $pool->dispose($dog[$i]);
        }

        print_r($pool->GetInfo());
    }
}

$dog = new PoolTest();
$dog->testPool();
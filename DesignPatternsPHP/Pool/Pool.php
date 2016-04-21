<?php

include_once("Worker.php");
include_once("Processor.php");
include_once("TestWorker.php");

class Pool
{
    private $instances = array();
    private $class;

    public function __construct($class)
    {
        $this->class = $class;
    }

    public function get()
    {
        if (count($this->instances) > 0) {
            return array_pop($this->instances);
        }

        return new $this->class();
    }

    public function dispose($instance)
    {
        $this->instances[] = $instance;
    }

    public function GetInfo(){
        return $this->instances;
    }
}
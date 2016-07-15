<?php
/**
 * Created by PhpStorm.
 * User: zhangqiang
 * Date: 16/7/13
 * Time: 上午10:23
 */




function my_sort($a,$b)
{
    if ($a==$b) return 0;
    return ($a<$b)?-1:1;
}

$arr=array("g"=>4,"h"=>2,"a"=>8,"d"=>"6");
uksort($arr,"my_sort");

print_r($arr);
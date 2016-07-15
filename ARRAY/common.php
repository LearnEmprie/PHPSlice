<?php
/**
 * Created by PhpStorm.
 * User: zhangqiang
 * Date: 16/7/13
 * Time: 上午10:43
 */

$dog = "Hello World";
$pig = array("k"=>"1","p"=>"2");
echo count($dog) , PHP_EOL;
echo sizeof($dog), PHP_EOL;
echo count($pig) , PHP_EOL;
echo sizeof($pig), PHP_EOL;


$numbers = range(1,20); //range 函数
srand((float)microtime()*1000000);
shuffle($numbers);
foreach ($numbers as $number) {
    echo "$number ";
}

echo "\n";

$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");
asort($fruits);
foreach ($fruits as $key => $val) {
    echo "$key = $val \n";
}



$fruits = array("d" => "lemon", "a" => "orange", "b" => "banana", "c" => "apple");


//array_walk 可以自己带进去数据 也可以更改 用引用
function test_alter(&$item1, $key, $prefix)
{
    $item1 = "{$prefix['d']}: $item1 \n";
}

array_walk($fruits, 'test_alter',array("d"=>"1"));

print_r($fruits);


$queue = array("orange", "banana");
array_unshift($queue, "apple", "raspberry");

print_r($queue);

$input = array("a" => "green", "red", "b" => "green", "blue", "red");
$result = array_unique($input);
print_r($result);


$array1 = array("a" => "green", "b" => "brown", "c" => "blue", "red");
$array2 = array("a" => "GREEN", "B" => "brown", "yellow", "red");

function dogness($a,$b){
    return strcasecmp($a,$b);
}

array_uintersect($array1, $array2, "dogness");


$pig = array(1,2,3,45,"1");

echo array_sum($pig);
array_shift($pig);
print_r($pig);

$input  = array("php", 4.0, array("green", "red"));
print_r(array_reverse($input));
print_r(array_reverse($input, TRUE));



//直接往里面灌 后面补充前面
$base = array("orange", "banana", "apple", "raspberry");
$replacements = array(0 => "pineapple", 3 => "__");
$replacements2 = array(0 => "grape");

$basket = array_replace($base, $replacements,$replacements2);
print_r($basket);



//$v是初始值
function rsum($v, $w)
{
    $v += $w;
    return $v;
}

function rmul($v, $w)
{
    $v *= $w;
    return $v;
}

$a = array(1, 2, 3, 4, 5);
$x = array();
$l = array(6,7,8);
$b = array_reduce($l, "rsum");
$c = array_reduce($a, "rmul", 10);
$d = array_reduce($x, "rsum", 1);


srand((float) microtime() * 10000000);
$input = array("Neo", "Morpheus", "Trinity", "Cypher", "Tank");
$rand_keys = array_rand($input, 5);
print_r($rand_keys);


$input = array(12, 10, 9);
$result = array_pad($input, 10, 1);
print_r($result);


$ar = array(
    array("10", 11, 100, 100, "a"),
    array(   1,  2, "2",   3,   1)
);
array_multisort($ar[0], SORT_ASC, SORT_STRING,
    $ar[1], SORT_NUMERIC, SORT_DESC);
print_r($ar);


$keys = array('foo', 5, 10, 'bar');
$a = array_fill_keys($keys, 'banana');
print_r($a);


print_r(array_fill(0,100,"x"));


$array1 = array("a" => "green", "red", "blue", "red");
$array2 = array("a" => "green", "yellow", "red");
$result = array_diff_assoc($array1, $array2);

print_r($result);
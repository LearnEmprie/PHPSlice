<?php

$time = explode(" ",microtime());
if(1) {
    for($i=0;$i<1000;$i++) {
        include_once "noting.php";
    }
}
$old  = explode(" ",microtime());

echo $old[0] - $time[0];


//include "noting.php";

define("MAX_VALUE",0.1);
define("MIN_VALUE",0.0);

$foo = 'Bob';              // 将 'Bob' 赋给 $foo
$bar = &$foo;              // 通过 $bar 引用 $foo
$bar = "My name is $bar";  // 修改 $bar 变量
echo $bar.PHP_EOL;
echo $foo.PHP_EOL;                 // $foo 的值也被修改


//引用赋值
//虽然在 PHP 中并不需要初始化变量，但对变量进行初始化是个好习惯。


//输入变量里的.都变成_
print_r(isset($_GET));


$a = 1; /* global scope */

function Test()
{
    echo $a.PHP_EOL; /* reference to local scope variable */
}

Test();


echo str_repeat("----",10).PHP_EOL;

$a = 1;
$b = 2;

function Sum()
{
    global $a, $b;

    $b = $a + $b;
}

Sum();
echo $b.PHP_EOL;

echo str_repeat("----",10).PHP_EOL;



$a = 1;
$b = 2;

function Sum_1()
{
    $GLOBALS['b'] = $GLOBALS['a'] + $GLOBALS['b'];
}

Sum_1();
echo $b;

echo str_repeat("----",10).PHP_EOL;


function dog (){
    static $dig = 0;
    $dig ++;
    echo $dig;
}

dog();
dog();

echo str_repeat("----",10).PHP_EOL;

class sample_class
{

    public $var = 0;

    public function func_having_static_var($x = NULL)
    {
        if ($x === NULL)
        { return $this->var; }
        $this->var = $x;
    }

}

$a = new sample_class();
$b = new sample_class();

echo $a->func_having_static_var()."\n";
echo $b->func_having_static_var()."\n";
// this will output (as expected):
//  0
//  0

$a->func_having_static_var(3);

echo $a->func_having_static_var()."\n";
echo $b->func_having_static_var()."\n";

//函数里的static也是全局的


class Constant{
    const MAX_VALUE = 1 ;
    const MIN_VALUE = 2 ;
}


echo Constant::MAX_VALUE;
echo Constant::MIN_VALUE;
echo str_repeat("----",10).PHP_EOL;
echo __LINE__.__FILE__.__DIR__.__FUNCTION__.__CLASS__;

echo str_repeat("----",10).PHP_EOL;

//因而，这样写“$b = ($a = 5)”和这样写“$a =5; $b=5”（分号标志着语句的结束）是一样的。
//因为赋值操作的顺序是由右到左的，也可以这么写“$b = $a =5”。

$a = 1;
if($a++ == 2){
    echo "++";
}else{
    echo "--";
}

$b = 2;
$a = 2;
$c = $a++;                 /* assign the value five into the variable $a and $b */
echo $a,"+",$c;
$e = $d = ++$b;
echo str_repeat("----",10).PHP_EOL;
echo $e,"+",$d,"+",$b;


function double($i)
{
    return $i*2;
}

$f = double($d++);  /* assign twice the value of $d before the increment, 2*6 = 12 to $f */
$g = double(++$e);  /* assign twice the value of $e after the increment, 2*7 = 14 to $g */
$h = $g += 10;

echo str_repeat("----",10).PHP_EOL;

echo $h ;

$a = true ? 0 : true ? 1 : 2;


$a = 1;
echo $a + $a++;

//运算符优先级
echo str_repeat("----",10).PHP_EOL;

var_dump(include_once ".gitignore");

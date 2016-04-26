<?php

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

    protected   $var = 0;

    public function func_having_static_var($x = NULL)
    {
        if ($x === NULL)
        { return $this->var; }
        $this->var = $x;
    }

    public  function put(){
        echo $this->var;
    }
}

$a = new sample_class();
$b = new sample_class();

echo $a->func_having_static_var()."\n";
echo $b->func_having_static_var()."\n";

$a->func_having_static_var(3);

echo $a->func_having_static_var()."\n";
echo $b->func_having_static_var()."\n";


$b->put();

//类里面的static 是类私有的 其他类不保存 和java有区别

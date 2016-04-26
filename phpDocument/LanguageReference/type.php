<?php
/**
 * Created by PhpStorm.
 * User: zhangqiang
 * Date: 16/4/21
 * Time: 上午10:08
 */

error_reporting(E_ALL);

//整形溢出
$large_number = 9223372036854775807;
var_dump($large_number);


var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7));  // float(4)


//未知分数转整形
echo str_repeat("-",20)."\r\n";
echo (int) ( (0.1+0.7) * 10 )."\r\n"; // 显示 7!

echo str_repeat("-",20)."\r\n";

$a = 1.234;
$b = 1.2e3;
$c = 7E-10;
echo $b;


/* 含有变量的更复杂示例 */
class foo
{
    var $foo;
    var $bar;

    function foo()
    {
        $this->foo = 'Foo';
        $this->bar = array('Bar1', 'Bar2', 'Bar3');
    }
}

$foo = new foo();
$name = 'MyName';

echo <<<EOT
My name is "$name". I am printing some $foo->foo.
Now, I am printing some {$foo->bar[1]}.
This should print a capital 'A': \x41
EOT;

var_dump(array(<<<EOD
foobar!
EOD
,
    <<<PPP
    "fff"
PPP
));


echo str_repeat("-",20).PHP_EOL;
$dog = 1;
echo "a {$dog}s";


$great = 'fantastic';

// 无效，输出: This is { fantastic}
echo "This is { $great}";
// E_NOTICE (undefined constant) 级别的错误。
echo "This is wrong: {$arr[foo][3]}";
// 有效，当在字符串中使用多重数组时，一定要用括号将它括起来
echo "This works: {$arr['foo'][3]}";

function getname(){
    return "dogf";
}

$dogf = "eee";
$name = "dogf";
echo "This is the value of the var named $name: {${$name}}";


echo "This is {${getname()}}".PHP_EOL;




$str = 'Look at the sea';
$str[strlen($str)-1] = 'e';


echo $str.PHP_EOL;


//资源 resource 总会被转变成 "Resource id #1" 这种结构的字符串，其中的 1 是 PHP 在运行时分配给该 resource 的唯一值。
//不要依赖此结构，可能会有变更。要得到一个 resource 的类型，可以用函数 get_resource_type()。

echo (float)'1.23.00'.PHP_EOL ;
//因为 PHP 实际并不区分索引数组和关联数组

echo str_repeat("-",10).PHP_EOL;


//unset 可以删除整个数组

// 创建一个简单的数组
$array = array(1, 2, 3, 4, 5);
print_r($array);

// 现在删除其中的所有元素，但保持数组本身不变:
foreach ($array as $i => $value) {
    unset($array[$i]);
}
print_r($array);

// 添加一个单元（注意新的键名是 5，而不是你可能以为的 0）
$array[] = 6;
print_r($array);

// 重新索引：
$array = array_values($array);
$array[] = 7;
print_r($array);

//unset() 函数允许删除数组中的某个键。但要注意数组将不会重建索引。如果需要删除后重建索引，可以用 array_values() 函数。


ini_set('display_errors', true);
ini_set('html_errors', false);
// Simple array:
$array = array(1);
$count = count($array);
for ($i = 0; $i < $count; $i++) {
    echo "\nChecking $i: \n";
    echo "Bad: " . $array['$i'] . "\n";
    echo "Good: " . $array[$i] . "\n";
    echo "Bad: {$array['$i']}\n";
    echo "Good: {$array[$i]}\n";
}

//定义一个常量


$arr1 = array(2, 3);
$arr2 = $arr1;
$arr2[] = 4; // $arr2 is changed,
// $arr1 is still array(2, 3)

$arr3 = &$arr1;
$arr3[] = 4; // now $arr1 and $arr3 are the same

$obj = (object) 'ciao';
var_dump($obj->scalar);  // outputs 'ciao'





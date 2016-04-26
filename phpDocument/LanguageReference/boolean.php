<?php
/**
 * Created by PhpStorm.
 * User: zhangqiang
 * Date: 16/4/21
 * Time: 上午10:08
 */

//如果文件内容是纯 PHP 代码，最好在文件末尾删除 PHP 结束标记。
//强制类型转换 字符串->bool是1 其他都是0
//函数型餐只能定array或者class 而且传错参数直接die()


$papi = array("s");

echo (bool)"haha"."\r\n";
echo (integer)"haha"."\r\n";
echo (float)"haha"."\r\n";
echo (double)"haha"."\r\n";
echo (string)"haha"."\r\n";


function dog(array $ab){

    echo "a";
    return $ab;
}


echo dog($papi);


echo "dd"."\r\n";


var_dump((bool) "");        // bool(false)
var_dump((bool) 1);         // bool(true)
var_dump((bool) -2);        // bool(true)
var_dump((bool) "foo");     // bool(true)
var_dump((bool) 2.3e5);     // bool(true)
var_dump((bool) array(12)); // bool(true)
var_dump((bool) array());   // bool(false)
var_dump((bool) "false");   // bool(true)
var_dump((bool) false);
var_dump((bool) NULL);
var_dump((bool) $pig);
var_dump((bool) 0.0);
var_dump((bool) "1");
var_dump((bool) "0");
var_dump((bool) "0.0");

echo str_repeat("-",20);

$x=TRUE;
$y=FALSE;
$z=$y OR $x;

echo $z;

$x=TRUE;
$y=FALSE;
$z=$y || $x;

echo $z."\r\n";

//This is why you should NEVER use the OR operator without explicit parentheses around the expression where it is being used.



echo str_repeat("-",20)."\r\n";
var_dump(0 == 1); // false
var_dump(0 == (bool)'all'); // false
var_dump(0 == 'all'); // TRUE, take care
var_dump(0 === 'all'); // false

// To avoid this behavior, you need to cast your parameter as string like that :
var_dump((string)0 == 'all'); // false


$a = !array();      // This will === true;
$a = !array('a');   // This will === false;
$s = !"";           // This will === true;
$s = !"hello";      // This will === false;

$a = !!array();   // This will === false; (as expected)

$status = (!!$array ? 'complete' : 'incomplete');

$s = !!"testing"; // This will === true; (as expected)

//In short true == 'false' is true.

echo str_repeat("-",20)."\r\n";

var_dump(true == 'false');
var_dump(true === !!'false');

var_dump(25/7);         // float(3.5714285714286)
var_dump((int) (25/7)); // int(3)
var_dump(round(25/7,6));  // float(4)

echo (int) ( (0.1+0.7) * 10 );
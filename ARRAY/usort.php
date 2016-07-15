<?php
/**
 * Created by PhpStorm.
 * User: zhangqiang
 * Date: 16/7/13
 * Time: 上午10:16
 */

function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}

$a = array(3, 2, 5, 6, 1);

usort($a, "cmp");

echo "当地一个参数小于等于大于返回-1,0,+1 \n";

foreach ($a as $key => $value) {
    echo "$key: $value \n";
}

echo "用 sort更合适 \n";



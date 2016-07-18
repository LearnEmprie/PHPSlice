<?php
/**
 * Created by PhpStorm.
 * User: zhangqiang
 * Date: 16/7/15
 * Time: 下午2:38
 */

function a_test($str)
{
    $dog = print_r(debug_backtrace());
    register_shutdown_function(a_error,$dog);
    php();

}

function a_error($dog){
    print_r($dog);
}

a_test('friend');
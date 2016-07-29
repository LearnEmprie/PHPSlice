<?php
/**
 * Created by PhpStorm.
 * User: zhangqiang
 * Date: 16/7/26
 * Time: 下午3:36
 */


//error_reporting(E_ERROR);


class Dog{

    public static function MyLove(){

        throw new Exception("MyLove Error");
    }

}

try {
    Dog::MyLove();
}catch(Exception $e){
    print_r($e->getMessage().$e->getLine().$e->getFile());
}
//print_r($dog);


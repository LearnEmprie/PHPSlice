<?php
/**
 * Created by PhpStorm.
 * User: zhangqiang
 * Date: 16/7/13
 * Time: 下午3:05
 */



$path = "/home/httpd/html/index.php";
$file = basename($path);        // $file is set to "index.php"
echo $file . PHP_EOL;
$file = basename($path,".php"); // $file is set to "index"
echo $file . PHP_EOL;


if (!copy("file.php", "dog.php")) {
    echo "failed to copy $file... ";
}



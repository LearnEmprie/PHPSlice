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

$fp = fopen("dog.php",'r');

if (!$fp) {
    echo 'Could not open file somefile.txt';
}
//while (false !== ($char = fgetc($fp))) {
   // echo "$char";
//}

//while(!feof($fp)){
//    $buffer = fgets($fp,4096);
//    echo $buffer;
//}



fclose($fp);
unlink("dog.php");


$contents = array();

$handle = fopen("pig.txt","r");
while ($userinfo = fscanf($handle, "%s %s %s")) {
    list ($name, $profession, $countrycode) = $userinfo;

    array_push($contents,$userinfo);

    echo $name," ",$profession," ",$countrycode . "\n" ;



}

if(file_exists("cat.txt")){
    unlink("cat.txt");
}

file_put_contents("cat.txt",json_encode($contents),FILE_APPEND);

fclose($handle);

echo hash_file("md5","cat.txt");

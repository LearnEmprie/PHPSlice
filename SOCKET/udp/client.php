<?php
/**
 * Created by PhpStorm.
 * User: zhangqiang
 * Date: 16/7/26
 * Time: 下午2:23
 */


$sock = socket_create(AF_INET, SOCK_DGRAM, SOL_UDP);
$msg = "hello\n";
$len = strlen($msg);

for($i=0; $i<1000;$i++) {
    socket_sendto($sock, $msg.$i, strlen($msg.$i), 0, '127.0.0.1', 11109);
}
socket_close($sock);
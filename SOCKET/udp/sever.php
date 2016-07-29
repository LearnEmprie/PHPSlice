<?php
/**
 * Created by PhpStorm.
 * User: zhangqiang
 * Date: 16/7/26
 * Time: 下午2:23
 */


//error_reporting( E_ALL );
set_time_limit( 0 );
ob_implicit_flush();
$socket = socket_create( AF_INET, SOCK_DGRAM, SOL_UDP );
if ( $socket === false ) {
    echo "socket_create() failed:reason:" . socket_strerror( socket_last_error() ) . "\n";
}
$ok = socket_bind( $socket, '127.0.0.1', 11109 );
if ( $ok === false ) {
    echo "socket_bind() failed:reason:" . socket_strerror( socket_last_error( $socket ) );
}
while ( true ) {
    $from = "";
    $port = 0;
    socket_recvfrom( $socket, $buf,1024, 0, $from, $port );
    echo $buf;
    usleep( 1000 );
}
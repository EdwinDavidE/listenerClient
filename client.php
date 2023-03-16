<?php
    $server="172.25.82.232";
    $port=3067;
    set_time_limit(0);

    $socket=socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
    $result=socket_connect($socket,$server,$port)or die("Could not connect to server");
    $message='what should I do';
    socket_write($socket, $message, strlen($message)) or die("could not send data to server");

    $result=socket_read($socket,1024) or die("Could not read server response");
    echo $result;

    socket_close($socket);
?>
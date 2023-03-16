<?php 
    $server="172.25.82.232";
    $port=3067;
    set_time_limit(0);

    $socket=socket_create(AF_INET, SOCK_STREAM, 0) or die("Could not create socket\n");
    $result=socket_bind($socket, $server, $port) or die("Could not bind to socket\n");

    while(true){
        $result=socket_listen($socket, 3) or die("could not set up socket listener\n");
        $spawn=socket_accept($socket) or die("Could not accept incoming connection\n");
        $input=socket_read($spawn, 1024) or die("could not read input\n");
        $output='i received your message';
        socket_write($spawn, $output, strlen($output)) or die("Could not white output\n");
    }

    socket_close($spawn);
    socket_close($socket);
?>
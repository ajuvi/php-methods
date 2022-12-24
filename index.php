<?php
//https://lornajane.net/posts/2008/accessing-incoming-put-data-from-php

public getContentHttp(){
    parse_str(file_get_contents("php://input"),$vars);
    return $vars;
}

$method = strtoupper($_SERVER['REQUEST_METHOD']);

$data=getContentHttp();
$nom=$data['nom'];
echo "{'method':'" . $method . "','nom':$nom}";

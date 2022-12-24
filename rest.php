<?php
//https://lornajane.net/posts/2008/accessing-incoming-put-data-from-php

public getContentHttp(){
    parse_str(file_get_contents("php://input"),$vars);
    return $vars;
}

$method = strtoupper($_SERVER['REQUEST_METHOD']);

$num1=0;
$num2=0;

if(method=='GET'){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num1'];
} else {
    $data=getContentHttp();
    $num1=$data['num1'];
    $num2=$data['num2'];
}


echo "{'method':'$method','num1':'$num1','num2':'$num2','result':'$num1*$num2'}";

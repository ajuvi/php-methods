<?php
//https://lornajane.net/posts/2008/accessing-incoming-put-data-from-php

function getArrayContent(){
    $json = file_get_contents("php://input");
    $data = json_decode($json,true);
    return $data;
}

$method = strtoupper($_SERVER['REQUEST_METHOD']);

$num1=0;
$num2=0;

if($method=='GET'){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
} else {
    $data=getArrayContent();
    $num1=$data['num1'];
    $num2=$data['num2'];
}

$mult = $num1*$num2;

echo json_encode(
	array("method"=>"$method",
	      "num1"=>"$num1",
	      "num2"=>"$num2",
	      "result"=>"$mult"
));

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
$result=0;
$operation="";

if($method=='GET'){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $result = $num1+$num2;
    $operation = "plus";

} else {
    $data=getArrayContent();
    $num1=$data['num1'];
    $num2=$data['num2'];   
    
    if($method=="POST"){
        $result = $num1-$num2;
        $operation = "minus";
    } else if($method=="PUT"){
        $result = $num1*$num2;
        $operation = "times";
    
    } else if($method=="DELETE"){
        $result = $num1/$num2;
        $operation = "obelus";
    }    
}



echo json_encode(
	array("method"=>"$method",
	      "operation"=>"$operation",
	      "num1"=>"$num1",
	      "num2"=>"$num2",
	      "result"=>"$result"
));

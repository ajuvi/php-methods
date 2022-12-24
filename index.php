<?php
//https://lornajane.net/posts/2008/accessing-incoming-put-data-from-php

public printJson($text){
    
}

public getContentHttp(){
    parse_str(file_get_contents("php://input"),$vars);
    return $vars;
}


$method = strtoupper($_SERVER['REQUEST_METHOD']);

switch($method){
    case "GET": 
        message("Has escollit el mètode GET");
        break;
    case "POST": 
        message("Has escollit el mètode POST");
        break;
    case "PUT": 
        message("Has escollit el mètode PUT");            
        break;
    case "DELETE": 
        message("Has escollit el mètode DELETE");            
        break;
    default:
        message("Has escollit un mètode no conegut.")
}


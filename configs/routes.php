<?php

$get_request_url = $_SERVER['REQUEST_URI'];
$split_uri = explode("/",$get_request_url);
$request_uri = $split_uri[1];

if($request_uri ==null || $request_uri =="goldfern"){
    require_once "app/views/home.php";
} else{
    switch($request_uri){

        case "goldfern/properties":
            require_once "../app/views/properties.php";
            break;
    }
}

?>
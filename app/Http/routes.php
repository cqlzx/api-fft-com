<?php
$routeFile = false;
if(isset($_SERVER['HTTP_HOST'])){
    foreach(config("app.domains") as $key => $value){
        if(in_array($_SERVER['HTTP_HOST'], $value)){
            $routeFile = __DIR__ . "/Routes/$key.php";
        }
    }
}

$routeFile = $routeFile ?: __DIR__ . "/Routes/interval.php";
require $routeFile;

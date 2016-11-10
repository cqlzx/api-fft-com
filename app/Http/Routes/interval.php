<?php
$app->get("/", function(){
   return 'root interval';
});

$app->get("/baby", function(){
   return "To my beloved baby : I love you!";
});

$app->get("/test/user", "App\\Http\\Controllers\\App\\TestController@testDatabase");

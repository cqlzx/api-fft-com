<?php
$app->get("/long", function(){
   return 'long';
});

$app->get("/", function(){
   return 'root';
});

$app->get("/baby", function(){
   return "To my beloved baby : I love you!";
});

$app->get("/test", function(){
   return "test hehe";
});
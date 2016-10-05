<?php
$app->get("/test", function(){
   return 'long';
});

$app->get("/", function(){
   return 'root';
});

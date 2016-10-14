<?php
$app->get("/long", function(){
   return 'long';
});

$app->get("/", function(){
   return 'root';
});

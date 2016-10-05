<?php

$app->group(['namespace' => 'App\\Http\\Controllers\\Web'], function($app){
    $app->get("/test", function(){
        return "test succeed";
    });
});
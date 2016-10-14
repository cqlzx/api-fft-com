<?php

$app->group(["namespace" => "App\\Http\\Controllers\\App"], function ($app) {
    $app->post("/app/user/loginAuthenticate", "User\\LoginController@authenticate");
    $app->post("/app/user/register", "User\\RegisterController@create");
    $app->get("/app/test", "User\\RegisterController@test");
});

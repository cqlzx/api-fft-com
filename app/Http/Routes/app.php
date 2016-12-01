<?php
$app->get("/", function($app){
   return "root app";
});

$app->group(["namespace" => "App\\Http\\Controllers\\App"], function ($app) {
    $app->post("/app/user/login", "User\\LoginController@authenticate");
    $app->post("/app/user/register", "User\\RegisterController@create");
    $app->get("/app/user/profile", "User\\ProfileController@getProfile");
    $app->post("/app/user/profile", "User\\ProfileController@postProfile");

    $app->get("/app/recipe/comment", "Recipe\\CommentController@getComments");
    $app->post("/app/recipe/comment", "Recipe\\CommentController@postComment");

    $app->get("/app/recipe/like/count", "Recipe\\LikeController@countLike");
    $app->get("/app/recipe/like/get", "Recipe\\LikeController@getLike");
    $app->post("/app/recipe/like/toggle", "Recipe\\LikeController@toggleLike");
});

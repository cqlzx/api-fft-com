<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 9/28/16
 * Time: 4:26 PM
 */

$app->get('/', function () use ($app) {
    return $app->version();
});

$app->get('/test', "ExampleController@test");
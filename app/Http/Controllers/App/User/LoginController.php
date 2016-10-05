<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 10/2/16
 * Time: 12:54 AM
 */

namespace App\Http\Controllers\App\User;


use Contracts\User\UserManager;

class LoginController
{
    public function authenticate(UserManager $userManager){
        $email = \Request::input('email');
        $password = \Request::input('password');

    }

    public function save(){

    }
}
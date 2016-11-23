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
        $user = $userManager->findOneByEmail($email);
        if($user == null){
            return 0;
        }
        if($user->validate($password)){
            return $user->getId();
        }
        return 0;
    }

    /**
     * Save user Facebook information and create user if login with Facebook
     */
    public function loginViaFacebook(){

    }

    /**
     * Save user Google information and create user if login with Google
     */
    public function loginViaGoogle(){

    }
}
<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 10/2/16
 * Time: 9:52 PM
 */

namespace App\Http\Controllers\App\User;


use Contracts\User\UserFactory;
use Models\User\UserImpl;


class RegisterController
{
    public function create(UserFactory $userFactory){
        $user = $userFactory->make();
        $user->setFirstname(\Request::input('firstname'));
        $user->setLastname(\Request::input('lastname'));
        $user->setEmail(\Request::input('email'));
        $user->setPassword(\Request::input('password'));

        getEM()->flush();
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/10/16
 * Time: 11:30 AM
 */

namespace App\Http\Controllers\App;


use Contracts\User\UserManager;

class TestController
{
    public function testDatabase(UserManager $userManager){
        $id = \Request::input("id");
        $user = $userManager->find($id);
        return [
            "id" => $user->getId(),
            "name" => $user->getFirstname() . $user->getLastname(),
            "email" => $user->getEmail()
        ];
    }
}
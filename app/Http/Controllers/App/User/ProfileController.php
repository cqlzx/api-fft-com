<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 10/2/16
 * Time: 9:52 PM
 */

namespace App\Http\Controllers\App\User;


use Contracts\User\ProfileManager;
use Contracts\User\UserManager;

class ProfileController
{
    public function getProfile(UserManager $userManager, ProfileManager $profileManager){
        $uid = \Request::input("uid");
        $user = $userManager->find($uid);
        $userProfile = $profileManager->find($uid);

        $arr = [
            "firstName" => $user->getFirstname(),
            "lastName" => $user->getLastname(),
            "email" => $user->getEmail()
        ];

        if($userProfile != null){
            $arr['country'] = $userProfile->getCountry();
            $arr['status'] = $userProfile->getStatus();
            $arr['profilePicture'] = $userProfile->getProfilePicture();
        }

        return $arr;
    }
}
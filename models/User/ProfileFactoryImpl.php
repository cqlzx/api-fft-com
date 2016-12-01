<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/30/16
 * Time: 10:37 PM
 */

namespace Models\User;


use Contracts\User\Profile;
use Contracts\User\ProfileFactory;

class ProfileFactoryImpl implements ProfileFactory
{

    /**
     * @param int $uid
     * @return Profile
     */
    public function make($uid)
    {
        $profile = new ProfileImpl();
        $profile->setUid($uid);
        getEM()->persist($profile);
        return $profile;
    }
}
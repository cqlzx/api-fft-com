<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/23/16
 * Time: 1:50 PM
 */

namespace Models\User;


use Contracts\User\Profile;
use Contracts\User\ProfileManager;

class ProfileManagerImpl implements ProfileManager
{

    /**
     * @param int $uid
     * @return Profile
     */
    public function find($uid)
    {
        return getEM()->find(Profile::class, $uid);
    }
}
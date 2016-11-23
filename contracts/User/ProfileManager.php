<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/23/16
 * Time: 1:44 PM
 */

namespace Contracts\User;


interface ProfileManager
{
    /**
     * @param int $uid
     * @return Profile
     */
    public function find($uid);
}
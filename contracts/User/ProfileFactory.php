<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/30/16
 * Time: 10:36 PM
 */

namespace Contracts\User;


interface ProfileFactory
{
    /**
     * @param int $uid
     * @return Profile
     */
    public function make($uid);
}
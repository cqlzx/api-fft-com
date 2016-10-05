<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 10/4/16
 * Time: 9:05 PM
 */

namespace Models\User;


use Contracts\User\User;
use Contracts\User\UserFactory;

class UserFactoryImpl implements UserFactory
{

    /**
     * @return User
     */
    public function make()
    {
        $user = new UserImpl();
        getEM()->persist($user);
        return $user;
    }
}
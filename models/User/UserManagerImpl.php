<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 10/2/16
 * Time: 5:41 PM
 */

namespace Models\User;


use Contracts\User\User;
use Contracts\User\UserManager;

class UserManagerImpl implements UserManager
{

    /**
     * @param int $id
     * @return User
     */
    public function find($id)
    {
        return getEM()->find(User::class, $id);
    }

    /**
     * @param array $criteria
     * @return User[]
     */
    public function findBy($criteria)
    {
        return getEM()->findBy(User::class, $criteria);
    }
}
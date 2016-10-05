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
     * @param string $email
     * @return User
     */
    public function findOneByEmail($email)
    {
        return getEM()->findOneBy(User::class, ['email' => $email]);
    }
}
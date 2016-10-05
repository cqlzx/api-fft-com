<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 10/2/16
 * Time: 5:27 PM
 */

namespace Contracts\User;


interface UserManager
{
    /**
     * @param int $id
     * @return User
     */
    public function find($id);

    /**
     * @param string $email
     * @return User
     */
    public function findOneByEmail($email);
}
<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 10/4/16
 * Time: 9:05 PM
 */

namespace Contracts\User;


interface UserFactory
{
    /**
     * @return User
     */
    public function make();
}
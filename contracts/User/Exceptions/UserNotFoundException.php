<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 10/5/16
 * Time: 6:37 PM
 */

namespace Contracts\User\Exceptions;


class UserNotFoundException extends \Exception
{
    public function __construct()
    {
        parent::__construct("User Not Found!");
    }
}
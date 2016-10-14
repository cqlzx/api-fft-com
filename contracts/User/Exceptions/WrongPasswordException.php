<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 10/5/16
 * Time: 6:43 PM
 */

namespace Contracts\User\Exceptions;


class WrongPasswordException extends \Exception
{
    public function __construct()
    {
        parent::__construct("Incorrect Password!");
    }
}
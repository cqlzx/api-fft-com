<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 10/2/16
 * Time: 1:52 AM
 */

namespace Contracts\User;


interface User
{
    public function getId();

    public function getFirstname();

    public function getLastname();

    public function getEmail();

    public function getPassword();

    public function setId($id);

    public function setFirstname($firstname);

    public function setLastname($lastname);

    public function setEmail($email);

    public function setPassword($password);

    public function validate($password);
}
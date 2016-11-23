<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/23/16
 * Time: 1:40 PM
 */

namespace Contracts\User;


interface Profile
{
    public function getUid();
    public function setUid($uid);
    public function getCountry();
    public function setCountry($country);
    public function getPreference();
    public function setPreference($preference);
    public function getStatus();
    public function setStatus($status);
    public function getProfilePicture();
    public function setProfilePicture($profilePicture);
}
<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/10/16
 * Time: 6:52 PM
 */

namespace Contracts\Recipe;


interface Comment
{
    public function getId();
    public function setId($id);
    public function getUid();
    public function setUid($uid);
    public function getRid();
    public function setRid($rid);
    public function getComment();
    public function setComment($comment);
    public function getDate();
    public function setDate($timestamp);
}
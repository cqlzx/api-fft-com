<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/12/16
 * Time: 2:50 PM
 */

namespace Contracts\Recipe;


interface Like
{
    public function getId();
    public function setId($id);
    public function getRid();
    public function setRid($id);
    public function getUid();
    public function setUid($id);

    public function delete();
}
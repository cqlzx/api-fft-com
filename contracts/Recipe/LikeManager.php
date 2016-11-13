<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/12/16
 * Time: 2:50 PM
 */

namespace Contracts\Recipe;


interface LikeManager
{
    /**
     * @param int $rid
     * @return int $num
     */
    public function count($rid);

    /**
     * @param int $rid
     * @param int $uid
     * @return Like
     */
    public function findOneBy($rid, $uid);
}
<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/13/16
 * Time: 12:06 PM
 */

namespace Models\Recipe;


use Contracts\Recipe\Like;
use Contracts\Recipe\LikeManager;
use Doctrine\Common\Collections\Criteria;

class LikeManagerImpl implements LikeManager
{

    /**
     * @param int $rid
     * @return int $num
     */
    public function count($rid)
    {
        return getEM()->matching(Like::class, Criteria::create()->where(Criteria::expr()->eq("rid", $rid)))->count();
    }

    /**
     * @param int $rid
     * @param int $uid
     * @return Like
     */
    public function findOneBy($rid, $uid)
    {
        return getEM()->findOneBy(Like::class, ["rid" => $rid, "uid" => $uid]);
    }
}
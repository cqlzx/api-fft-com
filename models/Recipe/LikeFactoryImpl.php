<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/13/16
 * Time: 11:55 AM
 */

namespace Models\Recipe;


use Contracts\Recipe\Like;
use Contracts\Recipe\LikeFactory;

class LikeFactoryImpl implements LikeFactory
{

    /**
     * @return Like
     */
    public function make()
    {
        $like = new LikeImpl();
        getEM()->persist($like);
        return $like;
    }
}
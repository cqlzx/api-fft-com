<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/12/16
 * Time: 3:09 PM
 */

namespace Contracts\Recipe;


interface LikeFactory
{
    /**
     * @return Like
     */
    public function make();
}
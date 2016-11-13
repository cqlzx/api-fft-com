<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/12/16
 * Time: 12:18 PM
 */

namespace Contracts\Recipe;


interface CommentFactory
{
    /**
     * @return Comment
     */
    public function make();
}
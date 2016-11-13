<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/12/16
 * Time: 12:22 PM
 */

namespace Models\Recipe;


use Contracts\Recipe\Comment;
use Contracts\Recipe\CommentFactory;

class CommentFactoryImpl implements CommentFactory
{

    /**
     * @return Comment
     */
    public function make()
    {
        $comment = new CommentImpl();
        getEM()->persist($comment);
        return $comment;
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/12/16
 * Time: 12:19 PM
 */

namespace Models\Recipe;


use Contracts\Recipe\Comment;
use Contracts\Recipe\CommentManager;

class CommentManagerImpl implements CommentManager
{

    /**
     * @param int $rid
     * @return Comment[]
     */
    public function findAll($rid)
    {
        return getEM()->findBy(Comment::class, ["rid" => $rid], ["date" => "asc"]);
    }

    /**
     * @param int $rid
     * @param int $offset
     * @param int $limit
     * @return Comment[]
     */
    public function findPagedComments($rid, $offset = 0, $limit = 0)
    {
        return getEM()->findBy(Comment::class, ["rid" => $rid], ["date" => "asc"], $limit, $offset);
    }
}
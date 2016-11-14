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
use Doctrine\Common\Collections\Criteria;

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

    /**
     * @param int $rid
     * @param int $lastCommentDate
     * @param int $perPage
     * @return Comment[]
     */
    public function findCommentsByLastCommentDate($rid, $lastCommentDate, $perPage)
    {
        $comments = getEM()->matching(Comment::class, Criteria::create()
            ->where(Criteria::expr()->eq("rid", $rid))
            ->andWhere(Criteria::expr()->lt("date", $lastCommentDate))
            ->orderBy(["date" => "desc"])
            ->setMaxResults($perPage))->toArray();

        return $comments;
    }
}
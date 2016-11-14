<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/12/16
 * Time: 11:57 AM
 */

namespace Contracts\Recipe;


interface CommentManager
{
    /**
     * @param int $rid
     * @return Comment[]
     */
    public function findAll($rid);

    /**
     * @param int $rid
     * @param int $offset
     * @param int $limit
     * @return Comment[]
     */
    public function findPagedComments($rid, $offset = 0, $limit = 0);

    /**
     * @param int $rid
     * @param int $lastCommentDate
     * @param int $perPage
     * @return Comment[]
     */
    public function findCommentsByLastCommentDate($rid, $lastCommentDate, $perPage);
}
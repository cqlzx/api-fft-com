<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/10/16
 * Time: 6:50 PM
 */

namespace App\Http\Controllers\App\Recipe;


use Contracts\Recipe\Comment;
use Contracts\Recipe\CommentFactory;
use Contracts\Recipe\CommentManager;
use Contracts\User\UserManager;

class CommentController
{
    public function getComments(CommentManager $commentManager, UserManager $userManager){
        $rid = \Request::input("rid");
        $lastCommentDate = \Request::input("lastCommentTime", time());
        $perPage = 10;
//        $page = \Request::input("page");
//        $perPage = \Request::input("limit", 10);
//        $offset = ($page - 1) * $perPage;

//        $comments = $commentManager->findPagedComments($rid, $offset, $perPage);

        $comments = $commentManager->findCommentsByLastCommentDate($rid, $lastCommentDate, $perPage);

        $comments = array_map(function($comment) use ($userManager){
            /** @var Comment $comment */
            $user = $userManager->find($comment->getUid());
            return [
                "user" => $user->getFirstname(),
                "comment" => $comment->getComment(),
                "date" => date("m/d/Y", $comment->getDate()),
                "timestamp" => $comment->getDate()
            ];
        }, $comments);

        return $comments;
    }

    public function postComment(CommentFactory $commentFactory){
        $comment = $commentFactory->make();
        $comment->setRid(\Request::input("rid"));
        $comment->setUid(\Request::input("uid"));
        $comment->setDate(time());
        $comment->setComment(\Request::input("comment"));

        getEM()->flush();
    }
}
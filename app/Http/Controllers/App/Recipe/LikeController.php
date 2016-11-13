<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/13/16
 * Time: 1:41 PM
 */

namespace App\Http\Controllers\App\Recipe;


use Contracts\Recipe\LikeFactory;
use Contracts\Recipe\LikeManager;

class LikeController
{
    public function countLike(LikeManager $likeManager){
        $rid = \Request::input("rid");
        $count =  $likeManager->count($rid);

        return $count;
    }

    public function getLike(LikeManager $likeManager){
        $rid = \Request::input("rid");
        $uid = \Request::input("uid");
        $like = $likeManager->findOneBy($rid, $uid);
        if($like == null){
            return "Not liked";
        }else{
            return "Already liked";
        }
    }

    public function toggleLike(LikeManager $likeManager, LikeFactory $likeFactory){
        $rid = \Request::input("rid");
        $uid = \Request::input("uid");
        $like = $likeManager->findOneBy($rid, $uid);
        if($like == null){
            $like = $likeFactory->make();
            $like->setUid($uid);
            $like->setRid($rid);
            getEM()->flush();
            return "liked";
        }else{
            $like->delete();
            getEM()->flush();
            return "canceled";
        }
    }
}
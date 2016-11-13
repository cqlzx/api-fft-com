<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/10/16
 * Time: 6:55 PM
 */

namespace Models\Recipe;


use Contracts\Recipe\Comment;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 * @ORM\Table(name="fft_recipe_comment")
 */
class CommentImpl implements Comment
{
    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     * @ORM\Id @ORM\GeneratedValue
     */
    protected $id;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $rid;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $uid;

    /**
     * @var string
     *
     * @ORM\Column(type="string")
     */
    protected $comment;

    /**
     * @var int
     *
     * @ORM\Column(type="integer")
     */
    protected $date;

    /**
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return int
     */
    public function getRid()
    {
        return $this->rid;
    }

    /**
     * @param int $rid
     */
    public function setRid($rid)
    {
        $this->rid = $rid;
    }

    /**
     * @return int
     */
    public function getUid()
    {
        return $this->uid;
    }

    /**
     * @param int $uid
     */
    public function setUid($uid)
    {
        $this->uid = $uid;
    }

    /**
     * @return string
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param string $comment
     */
    public function setComment($comment)
    {
        $this->comment = $comment;
    }

    /**
     * @return int
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param int $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }


}
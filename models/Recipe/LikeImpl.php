<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 11/13/16
 * Time: 11:51 AM
 */

namespace Models\Recipe;


use Contracts\Recipe\Like;
use Doctrine\ORM\Mapping as ORM;


/**
 * @ORM\Entity
 * @ORM\Table(name="fft_recipe_like")
 */
class LikeImpl implements Like
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

    public function delete(){
        getEM()->remove($this);
    }
}
<?php
/**
 * Created by PhpStorm.
 * User: long
 * Date: 10/2/16
 * Time: 5:44 PM
 */

namespace Contracts\Common;


use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;

interface EntityManager
{
    public function __construct(\Doctrine\ORM\EntityManager $manager);

    public function find($class, $id);

    public function findBy($class, array $criteria, array $orderBy = null, $limit = null, $offset = null);

    public function findOneBy($class, array $criteria);

    public function flush($entity = null);

    public function persist($entity);

    public function refresh($entity);

    public function remove($entity);

    /**
     * @param string $class
     * @param Criteria $criteria
     * @return Collection
     */
    public function matching($class, Criteria $criteria);
}
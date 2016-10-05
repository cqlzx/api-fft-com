<?php
namespace Models\Common;

use Contracts\Common\EntityManager;
use Doctrine\Common\Collections\Collection;
use Doctrine\Common\Collections\Criteria;

class EntityManagerImpl implements EntityManager
{
    protected $em;

    public function __construct(\Doctrine\ORM\EntityManager $manager)
    {
        $this->em = $manager;
    }

    private function getClassName($class)
    {
        $mapping = app("EntityManager.classMap");
        return isset($mapping[$class]) ? $mapping[$class] : $class;
    }

    public function find($class, $id)
    {
        return $this->em->find($this->getClassName($class), $id);
    }

    public function findBy($class, array $criteria, array $orderBy = null, $limit = null, $offset = null)
    {
        return $this->em->getRepository($this->getClassName($class))->findBy($criteria, $orderBy, $limit, $offset);
    }

    public function findOneBy($class, array $criteria)
    {
        return $this->em->getRepository($this->getClassName($class))->findOneBy($criteria);
    }

    public function flush($entity = null)
    {
        $this->em->flush($entity);
    }

    public function persist($entity)
    {
        $this->em->persist($entity);
    }

    public function refresh($entity){
        $this->em->refresh($entity);
    }

    public function remove($entity)
    {
        $this->em->remove($entity);
    }

    /**
     * @param string $class
     * @param Criteria $criteria
     * @return Collection
     */
    public function matching($class, Criteria $criteria)
    {
        return $this->em->getRepository($this->getClassName($class))->matching($criteria);
    }
}
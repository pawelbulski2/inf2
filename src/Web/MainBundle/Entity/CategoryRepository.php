<?php
//Web/MainBundle/Entity/CategoryRepository.php

namespace Web\MainBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\ORM\EntityRepository;


class CategoryRepository extends EntityRepository
{
    public function getTop()
    {
        return $this->getEntityManager()
                    ->createQuery(
                        "SELECT p FROM WebMainBundle:Category p WHERE p.idt is NULL"
                   )->getResult();
    }
}
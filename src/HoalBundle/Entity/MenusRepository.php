<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace HoalBundle\Entity;

use Doctrine\ORM\EntityRepository;

/**
 * Description of MenusRepository
 *
 * @author lnascimento
 */
class MenusRepository extends EntityRepository {

    public function getMenus() {
//
//        $em = $this->getEntityManager();
//
//        $result = $em->createQuery("SELECT descricao FROM HoalBundle:Menus")->getResult();
//        return  $result;
    }

}

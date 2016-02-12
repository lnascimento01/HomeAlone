<?php

namespace HoalBundle\Controller;

use HoalBundle\Entity\Menus;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use HoalBundle\Controller\Engines;

class TesteController extends Controller {

    /**
     * @Route("/login")
     */
    public function testeAction() {

        $em = $this->get('doctrine')->getManager();
        $menusRepo = $em->getRepository('HoalBundle:Menus');
        $subMenusRepo = $em->getRepository('HoalBundle:SubMenus');
        $menus = $menusRepo->findAll();
        $subMenus = $subMenusRepo->findAll();
        
        $engines = new Engines();

//        $result[] = $this->buildMenu($menus, $subMenus);
        $urlRoot = $engines->urlRoot;

        return $this->render('HoalBundle:Default:teste.html.twig', array(
                    'root' => $urlRoot . '/HomeAlone/src/HoalBundle/Resources/intern/',
                    'menus' => $menus,
                    'subMenus' => $subMenus));
    }

    public function buildMenu($menus, $subMenus) {
        $listaMenus = [];

        foreach ($menus as $menu) {
            $item = new Menus();
            $item->setId($menu->getId());
            $item->setNome($menu->getNome());
            $item->setDescricao($menu->getDescricao());

            $listaMenus[] = $item;
        }

        return $listaMenus;
    }

}

<?php

namespace HoalBundle\Controller;

use HoalBundle\Controller\Engines;
use HoalBundle\Entity\Menus;
use HoalBundle\Entity\SubMenus;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class HomeController extends Controller {

    /**
     * @Route("/login")
     */
    public function indexAction() {

        $engines = new Engines();

        $menus = $this->buildMenus();
        $subMenus = $this->buildSubMenus();

        $urlRoot = $engines->urlRoot;

        return $this->render('HoalBundle:Default:home.html.twig', array(
                    'root' => $urlRoot . '/HomeAlone/src/HoalBundle/Resources/intern/',
                    'menus' => $menus,
                    'subMenus' => $subMenus));
    }

    public function buildMenus() {
        $em = $this->get('doctrine')->getManager();
        $menusRepo = $em->getRepository('HoalBundle:Menus');
        $menus = $menusRepo->findAll();
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

    public function buildSubMenus() {
        $em = $this->get('doctrine')->getManager();
        $subMenusRepo = $em->getRepository('HoalBundle:SubMenus');
        $subMenus = $subMenusRepo->findAll();
        $listaSubMenus = [];

        foreach ($subMenus as $subMenu) {
            $item = new SubMenus();
            $item->setId($subMenu->getId());
            $item->setNome($subMenu->getNome());
            $item->setDescricao($subMenu->getDescricao());
            $item->setNivel($subMenu->getNivel());
            $item->setIdMenu($subMenu->getIdMenu()->getId());

            $listaSubMenus[] = $item;

        }
        
        return $listaSubMenus;
    }

}

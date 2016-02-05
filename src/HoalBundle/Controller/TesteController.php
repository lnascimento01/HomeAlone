<?php

namespace HoalBundle\Controller;

use HoalBundle\Entity\Menus;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TesteController extends Controller {

    /**
     * @Route("/login")
     */
    public function testeAction() {

        $em = $this->get('doctrine')->getManager();
        $menusRepo = $em->getRepository('HoalBundle:Menus');
        $subMenusRepo = $em->getRepository('HoalBundle:SubMenu');
        $menus = $menusRepo->findAll();
        $subMenus = $subMenusRepo->findAll();

        $result = [];

        $result[] = $this->buildMenu($menus, $subMenus);
        echo "<pre>";
        print_r($result);
        echo "</pre>";
        exit();

        $urlRoot = '//' . $_SERVER['SERVER_NAME'];

        return $this->render('HoalBundle:Default:teste.html.twig', array(
                    'root' => $urlRoot . '/HomeAlone/src/HoalBundle/Resources/intern/',
                    'menus' => $result));
    }

    public function buildMenu($menus, $subMenus) {
        $listaMenus = array();


        $listaMenus['id'] = $menus->getId();
        $listaMenus['nome'] = $menus->getNome();
        $listaMenus['descricao'] = $menus->getDescricao();

        echo "<pre>";
        print_r($listaMenus);
        echo "</pre>";
        exit();
    }

}

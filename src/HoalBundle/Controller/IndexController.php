<?php

namespace HoalBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class IndexController extends Controller {

    public function indexAction() {
        return $this->render('HoalBundle:Index:index.html.twig');
    }

}

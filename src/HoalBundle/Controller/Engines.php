<?php

namespace HoalBundle\Controller;

class Engines {

//        $url = array(a => "'//' . $_SERVER['SERVER_NAME']");
    public $urlRoot;

    public function setUrl() {
        $this->urlRoot = '//' . $_SERVER['SERVER_NAME'];

        return $this;
    }

}

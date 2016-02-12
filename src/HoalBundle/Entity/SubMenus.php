<?php

namespace HoalBundle\Entity;

/**
 * SubMenus
 */
class SubMenus
{
    /**
     * @var string
     */
    private $nome;

    /**
     * @var string
     */
    private $descricao;

    /**
     * @var integer
     */
    private $nivel;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nome
     *
     * @param string $nome
     *
     * @return SubMenus
     */
    public function setNome($nome)
    {
        $this->nome = $nome;

        return $this;
    }

    /**
     * Get nome
     *
     * @return string
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Set descricao
     *
     * @param string $descricao
     *
     * @return SubMenus
     */
    public function setDescricao($descricao)
    {
        $this->descricao = $descricao;

        return $this;
    }

    /**
     * Get descricao
     *
     * @return string
     */
    public function getDescricao()
    {
        return $this->descricao;
    }

    /**
     * Set nivel
     *
     * @param integer $nivel
     *
     * @return SubMenus
     */
    public function setNivel($nivel)
    {
        $this->nivel = $nivel;

        return $this;
    }

    /**
     * Get nivel
     *
     * @return integer
     */
    public function getNivel()
    {
        return $this->nivel;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @var \HoalBundle\Entity\Menus
     */
    private $idMenu;


    /**
     * Set idMenu
     *
     * @param \HoalBundle\Entity\Menus $idMenu
     *
     * @return SubMenus
     */
    public function setIdMenu(\HoalBundle\Entity\Menus $idMenu = null)
    {
        $this->idMenu = $idMenu;

        return $this;
    }

    /**
     * Get idMenu
     *
     * @return \HoalBundle\Entity\Menus
     */
    public function getIdMenu()
    {
        return $this->idMenu;
    }
}

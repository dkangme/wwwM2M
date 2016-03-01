<?php

namespace AppBundle\Entity;

/**
 * Pais
 */
class Pais
{
    /**
     * @var string
     */
    private $nombrepais;

    /**
     * @var integer
     */
    private $id;


    /**
     * Set nombrepais
     *
     * @param string $nombrepais
     *
     * @return Pais
     */
    public function setNombrepais($nombrepais)
    {
        $this->nombrepais = $nombrepais;

        return $this;
    }

    /**
     * Get nombrepais
     *
     * @return string
     */
    public function getNombrepais()
    {
        return $this->nombrepais;
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
}


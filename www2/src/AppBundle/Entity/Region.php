<?php

namespace AppBundle\Entity;

/**
 * Region
 */
class Region
{
    /**
     * @var string
     */
    private $nombreregion;

    /**
     * @var string
     */
    private $abreviaturaregion;

    /**
     * @var integer
     */
    private $idregion;

    /**
     * @var \AppBundle\Entity\Pais
     */
    private $paispais;


    /**
     * Set nombreregion
     *
     * @param string $nombreregion
     *
     * @return Region
     */
    public function setNombreregion($nombreregion)
    {
        $this->nombreregion = $nombreregion;

        return $this;
    }

    /**
     * Get nombreregion
     *
     * @return string
     */
    public function getNombreregion()
    {
        return $this->nombreregion;
    }

    /**
     * Set abreviaturaregion
     *
     * @param string $abreviaturaregion
     *
     * @return Region
     */
    public function setAbreviaturaregion($abreviaturaregion)
    {
        $this->abreviaturaregion = $abreviaturaregion;

        return $this;
    }

    /**
     * Get abreviaturaregion
     *
     * @return string
     */
    public function getAbreviaturaregion()
    {
        return $this->abreviaturaregion;
    }

    /**
     * Get idregion
     *
     * @return integer
     */
    public function getIdregion()
    {
        return $this->idregion;
    }

    /**
     * Set paispais
     *
     * @param \AppBundle\Entity\Pais $paispais
     *
     * @return Region
     */
    public function setPaispais(\AppBundle\Entity\Pais $paispais = null)
    {
        $this->paispais = $paispais;

        return $this;
    }

    /**
     * Get paispais
     *
     * @return \AppBundle\Entity\Pais
     */
    public function getPaispais()
    {
        return $this->paispais;
    }
}


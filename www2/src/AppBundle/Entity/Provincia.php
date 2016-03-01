<?php

namespace AppBundle\Entity;

/**
 * Provincia
 */
class Provincia
{
    /**
     * @var string
     */
    private $nombreprovincia;

    /**
     * @var integer
     */
    private $idprovincia;

    /**
     * @var \AppBundle\Entity\Region
     */
    private $regionregion;


    /**
     * Set nombreprovincia
     *
     * @param string $nombreprovincia
     *
     * @return Provincia
     */
    public function setNombreprovincia($nombreprovincia)
    {
        $this->nombreprovincia = $nombreprovincia;

        return $this;
    }

    /**
     * Get nombreprovincia
     *
     * @return string
     */
    public function getNombreprovincia()
    {
        return $this->nombreprovincia;
    }

    /**
     * Get idprovincia
     *
     * @return integer
     */
    public function getIdprovincia()
    {
        return $this->idprovincia;
    }

    /**
     * Set regionregion
     *
     * @param \AppBundle\Entity\Region $regionregion
     *
     * @return Provincia
     */
    public function setRegionregion(\AppBundle\Entity\Region $regionregion = null)
    {
        $this->regionregion = $regionregion;

        return $this;
    }

    /**
     * Get regionregion
     *
     * @return \AppBundle\Entity\Region
     */
    public function getRegionregion()
    {
        return $this->regionregion;
    }
}


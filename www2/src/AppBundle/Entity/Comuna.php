<?php

namespace AppBundle\Entity;

/**
 * Comuna
 */
class Comuna
{
    /**
     * @var string
     */
    private $nombrecomuna;

    /**
     * @var integer
     */
    private $idcomuna;

    /**
     * @var \AppBundle\Entity\Provincia
     */
    private $provinciaprovincia;


    /**
     * Set nombrecomuna
     *
     * @param string $nombrecomuna
     *
     * @return Comuna
     */
    public function setNombrecomuna($nombrecomuna)
    {
        $this->nombrecomuna = $nombrecomuna;

        return $this;
    }

    /**
     * Get nombrecomuna
     *
     * @return string
     */
    public function getNombrecomuna()
    {
        return $this->nombrecomuna;
    }

    /**
     * Get idcomuna
     *
     * @return integer
     */
    public function getIdcomuna()
    {
        return $this->idcomuna;
    }

    /**
     * Set provinciaprovincia
     *
     * @param \AppBundle\Entity\Provincia $provinciaprovincia
     *
     * @return Comuna
     */
    public function setProvinciaprovincia(\AppBundle\Entity\Provincia $provinciaprovincia = null)
    {
        $this->provinciaprovincia = $provinciaprovincia;

        return $this;
    }

    /**
     * Get provinciaprovincia
     *
     * @return \AppBundle\Entity\Provincia
     */
    public function getProvinciaprovincia()
    {
        return $this->provinciaprovincia;
    }
}


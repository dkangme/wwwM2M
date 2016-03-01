<?php

namespace AppBundle\Entity;

/**
 * Location
 */
class Location
{
    /**
     * @var string
     */
    private $descrip = 'Mobile';

    /**
     * @var string
     */
    private $latlon = '-33.437853, -70.650480';

    /**
     * @var integer
     */
    private $idlocation;


    /**
     * Set descrip
     *
     * @param string $descrip
     *
     * @return Location
     */
    public function setDescrip($descrip)
    {
        $this->descrip = $descrip;

        return $this;
    }

    /**
     * Get descrip
     *
     * @return string
     */
    public function getDescrip()
    {
        return $this->descrip;
    }

    /**
     * Set latlon
     *
     * @param string $latlon
     *
     * @return Location
     */
    public function setLatlon($latlon)
    {
        $this->latlon = $latlon;

        return $this;
    }

    /**
     * Get latlon
     *
     * @return string
     */
    public function getLatlon()
    {
        return $this->latlon;
    }

    /**
     * Get idlocation
     *
     * @return integer
     */
    public function getIdlocation()
    {
        return $this->idlocation;
    }
}


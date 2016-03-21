<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Location
 *
 * @ORM\Table(name="Location")
 * @ORM\Entity
 */
class Location
{
    /**
     * @var string
     *
     * @ORM\Column(name="descrip", type="string", length=128, nullable=false)
     */
    private $descrip = 'Mobile';

    /**
     * @var string
     *
     * @ORM\Column(name="latlon", type="string", length=45, nullable=false)
     */
    private $latlon = '-33.437853, -70.650480';

    /**
     * @var integer
     *
     * @ORM\Column(name="idLocation", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idlocation;



    /**
     * Get idlocation
     *
     * @return integer
     */
    public function getIdlocation()
    {
        return $this->idlocation;
    }

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
}

<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincia
 *
 * @ORM\Table(name="Provincia", indexes={@ORM\Index(name="fk_Provincia_Region1_idx", columns={"Region_idRegion"})})
 * @ORM\Entity
 */
class Provincia
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreProvincia", type="string", length=128, nullable=false)
     */
    private $nombreprovincia;

    /**
     * @var integer
     *
     * @ORM\Column(name="idProvincia", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idprovincia;

    /**
     * @var \AppBundle\Entity\Region
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Region")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Region_idRegion", referencedColumnName="idRegion")
     * })
     */
    private $regionregion;



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

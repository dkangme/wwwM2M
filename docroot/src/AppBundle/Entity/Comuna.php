<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Comuna
 *
 * @ORM\Table(name="Comuna", indexes={@ORM\Index(name="fk_Comuna_Provincia1_idx", columns={"Provincia_idProvincia"})})
 * @ORM\Entity
 */
class Comuna
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreComuna", type="string", length=128, nullable=false)
     */
    private $nombrecomuna;

    /**
     * @var integer
     *
     * @ORM\Column(name="idComuna", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idcomuna;

    /**
     * @var \AppBundle\Entity\Provincia
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Provincia_idProvincia", referencedColumnName="idProvincia")
     * })
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

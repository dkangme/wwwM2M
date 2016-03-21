<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Region
 *
 * @ORM\Table(name="Region", indexes={@ORM\Index(name="fk_Region_Pais1_idx", columns={"Pais_idPais"})})
 * @ORM\Entity
 */
class Region
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombreRegion", type="string", length=128, nullable=false)
     */
    private $nombreregion;

    /**
     * @var string
     *
     * @ORM\Column(name="abreviaturaRegion", type="string", length=24, nullable=true)
     */
    private $abreviaturaregion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idRegion", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idregion;

    /**
     * @var \AppBundle\Entity\Pais
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Pais")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Pais_idPais", referencedColumnName="id")
     * })
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

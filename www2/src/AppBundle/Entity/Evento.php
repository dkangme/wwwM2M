<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Evento
 *
 * @ORM\Table(name="Evento", indexes={@ORM\Index(name="fk_Evento_Customer1_idx", columns={"Customer_id"})})
 * @ORM\Entity
 */
class Evento
{
    /**
     * @var \DateTime
     *
     * @ORM\Column(name="fechaEvento", type="datetime", nullable=false)
     */
    private $fechaevento;

    /**
     * @var integer
     *
     * @ORM\Column(name="nivelEvento", type="integer", nullable=false)
     */
    private $nivelevento = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="descripcion", type="string", length=256, nullable=false)
     */
    private $descripcion;

    /**
     * @var integer
     *
     * @ORM\Column(name="idEvento", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idevento;

    /**
     * @var \AppBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Customer_id", referencedColumnName="id")
     * })
     */
    private $customer;



    /**
     * Get idevento
     *
     * @return integer
     */
    public function getIdevento()
    {
        return $this->idevento;
    }

    /**
     * Set fechaevento
     *
     * @param \DateTime $fechaevento
     *
     * @return Evento
     */
    public function setFechaevento($fechaevento)
    {
        $this->fechaevento = $fechaevento;

        return $this;
    }

    /**
     * Get fechaevento
     *
     * @return \DateTime
     */
    public function getFechaevento()
    {
        return $this->fechaevento;
    }

    /**
     * Set nivelevento
     *
     * @param integer $nivelevento
     *
     * @return Evento
     */
    public function setNivelevento($nivelevento)
    {
        $this->nivelevento = $nivelevento;

        return $this;
    }

    /**
     * Get nivelevento
     *
     * @return integer
     */
    public function getNivelevento()
    {
        return $this->nivelevento;
    }

    /**
     * Set descripcion
     *
     * @param string $descripcion
     *
     * @return Evento
     */
    public function setDescripcion($descripcion)
    {
        $this->descripcion = $descripcion;

        return $this;
    }

    /**
     * Get descripcion
     *
     * @return string
     */
    public function getDescripcion()
    {
        return $this->descripcion;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     *
     * @return Evento
     */
    public function setCustomer(\AppBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}

<?php

namespace AppBundle\Entity;

/**
 * Evento
 */
class Evento
{
    /**
     * @var \DateTime
     */
    private $fechaevento;

    /**
     * @var integer
     */
    private $nivelevento = '1';

    /**
     * @var string
     */
    private $descripcion;

    /**
     * @var integer
     */
    private $idevento;

    /**
     * @var \AppBundle\Entity\Customer
     */
    private $customer;


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
     * Get idevento
     *
     * @return integer
     */
    public function getIdevento()
    {
        return $this->idevento;
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


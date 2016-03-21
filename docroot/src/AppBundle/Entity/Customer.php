<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Customer
 *
 * @ORM\Table(name="Customer", indexes={@ORM\Index(name="fk_Customer_Comuna1_idx", columns={"Comuna_idComuna"})})
 * @ORM\Entity
 */
class Customer
{
    /**
     * @var string
     *
     * @ORM\Column(name="razonSocial", type="string", length=128, nullable=false)
     */
    private $razonsocial;

    /**
     * @var string
     *
     * @ORM\Column(name="nombre", type="string", length=128, nullable=false)
     */
    private $nombre;

    /**
     * @var string
     *
     * @ORM\Column(name="direccionComercial", type="string", length=256, nullable=false)
     */
    private $direccioncomercial;

    /**
     * @var string
     *
     * @ORM\Column(name="telefonoContacto", type="string", length=32, nullable=true)
     */
    private $telefonocontacto;

    /**
     * @var string
     *
     * @ORM\Column(name="emailContacto", type="string", length=32, nullable=true)
     */
    private $emailcontacto;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var \AppBundle\Entity\Comuna
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Comuna")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Comuna_idComuna", referencedColumnName="idComuna")
     * })
     */
    private $comunacomuna;



    /**
     * Set razonsocial
     *
     * @param string $razonsocial
     *
     * @return Customer
     */
    public function setRazonsocial($razonsocial)
    {
        $this->razonsocial = $razonsocial;

        return $this;
    }

    /**
     * Get razonsocial
     *
     * @return string
     */
    public function getRazonsocial()
    {
        return $this->razonsocial;
    }

    /**
     * Set nombre
     *
     * @param string $nombre
     *
     * @return Customer
     */
    public function setNombre($nombre)
    {
        $this->nombre = $nombre;

        return $this;
    }

    /**
     * Get nombre
     *
     * @return string
     */
    public function getNombre()
    {
        return $this->nombre;
    }

    /**
     * Set direccioncomercial
     *
     * @param string $direccioncomercial
     *
     * @return Customer
     */
    public function setDireccioncomercial($direccioncomercial)
    {
        $this->direccioncomercial = $direccioncomercial;

        return $this;
    }

    /**
     * Get direccioncomercial
     *
     * @return string
     */
    public function getDireccioncomercial()
    {
        return $this->direccioncomercial;
    }

    /**
     * Set telefonocontacto
     *
     * @param string $telefonocontacto
     *
     * @return Customer
     */
    public function setTelefonocontacto($telefonocontacto)
    {
        $this->telefonocontacto = $telefonocontacto;

        return $this;
    }

    /**
     * Get telefonocontacto
     *
     * @return string
     */
    public function getTelefonocontacto()
    {
        return $this->telefonocontacto;
    }

    /**
     * Set emailcontacto
     *
     * @param string $emailcontacto
     *
     * @return Customer
     */
    public function setEmailcontacto($emailcontacto)
    {
        $this->emailcontacto = $emailcontacto;

        return $this;
    }

    /**
     * Get emailcontacto
     *
     * @return string
     */
    public function getEmailcontacto()
    {
        return $this->emailcontacto;
    }

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set comunacomuna
     *
     * @param \AppBundle\Entity\Comuna $comunacomuna
     *
     * @return Customer
     */
    public function setComunacomuna(\AppBundle\Entity\Comuna $comunacomuna = null)
    {
        $this->comunacomuna = $comunacomuna;

        return $this;
    }

    /**
     * Get comunacomuna
     *
     * @return \AppBundle\Entity\Comuna
     */
    public function getComunacomuna()
    {
        return $this->comunacomuna;
    }
}

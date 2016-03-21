<?php

namespace AuthBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;

/**
 * User
 *
 * @ORM\Table(name="fos_user")
 * @ORM\Entity
 */
class User extends BaseUser
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", precision=0, scale=0, nullable=false, unique=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    protected $id;


    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * @var string
     *
     * @ORM\Column(name="nombres", type="string", length=64, precision=0, scale=0, nullable=true, unique=false)
     */
    private $nombres;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_p", type="string", length=64, precision=0, scale=0, nullable=true, unique=false)
     */
    private $apellido_p;

    /**
     * @var string
     *
     * @ORM\Column(name="apellido_m", type="string", length=64, precision=0, scale=0, nullable=true, unique=false)
     */
    private $apellido_m;

    /**
     * @var string
     *
     * @ORM\Column(name="cell_phone", type="string", length=16, precision=0, scale=0, nullable=true, unique=true)
     */
    private $cellPhone;

    /**
     * @var \AppBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="idCustomer", referencedColumnName="id", nullable=true)
     * })
     */
    private $customercustomer;



    /**
     * Set nombres
     *
     * @param string $nombres
     *
     * @return User
     */
    public function setNombres($nombres)
    {
        $this->nombres = $nombres;

        return $this;
    }

    /**
     * Get nombres
     *
     * @return string
     */
    public function getNombres()
    {
        return $this->nombres;
    }

    /**
     * Set apellidoP
     *
     * @param string $apellidoP
     *
     * @return User
     */
    public function setApellidoP($apellidoP)
    {
        $this->apellido_p = $apellidoP;

        return $this;
    }

    /**
     * Get apellidoP
     *
     * @return string
     */
    public function getApellidoP()
    {
        return $this->apellido_p;
    }

    /**
     * Set apellidoM
     *
     * @param string $apellidoM
     *
     * @return User
     */
    public function setApellidoM($apellidoM)
    {
        $this->apellido_m = $apellidoM;

        return $this;
    }

    /**
     * Get apellidoM
     *
     * @return string
     */
    public function getApellidoM()
    {
        return $this->apellido_m;
    }

    /**
     * Set cellPhone
     *
     * @param string $cellPhone
     *
     * @return User
     */
    public function setCellPhone($cellPhone)
    {
        $this->cellPhone = $cellPhone;

        return $this;
    }

    /**
     * Get cellPhone
     *
     * @return string
     */
    public function getCellPhone()
    {
        return $this->cellPhone;
    }

    /**
     * Set customercustomer
     *
     * @param \AppBundle\Entity\Customer $customercustomer
     *
     * @return User
     */
    public function setCustomercustomer(\AppBundle\Entity\Customer $customercustomer = null)
    {
        $this->customercustomer = $customercustomer;

        return $this;
    }

    /**
     * Get customercustomer
     *
     * @return \AppBundle\Entity\Customer
     */
    public function getCustomercustomer()
    {
        return $this->customercustomer;
    }
}

<?php

namespace AuthBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;
use AppBundle\Entity\Customer;

/**
 * @ORM\Entity
 * @ORM\Table(name="auth_user")
 */

class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
    * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer")
    * @ORM\JoinColumn(name="idCustomer", referencedColumnName="id")
    * @var \AuthBundle\Entity\Costumer
    */

    private $customercustomer;

    /**
     * @ORM\Column(type="string", length=64, unique=false, nullable=true)
     * @var string
     */
    private $nombres;

    
    /**
     * @ORM\Column(type="string", length=64, unique=false, nullable=true)
     * @var string
    */
    private $apellido_p;

    
    /**
     * @ORM\Column(type="string", length=64, unique=false, nullable=true)
     * @var string
     */
    private $apellido_m;

    /**
     * @ORM\Column(type="string", length=16, unique=true, nullable=true)
     * @var string
     */
    private $cellPhone;

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

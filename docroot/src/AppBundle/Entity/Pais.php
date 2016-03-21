<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Pais
 *
 * @ORM\Table(name="Pais", uniqueConstraints={@ORM\UniqueConstraint(name="nombrePais_UNIQUE", columns={"nombrePais"})})
 * @ORM\Entity
 */
class Pais
{
    /**
     * @var string
     *
     * @ORM\Column(name="nombrePais", type="string", length=128, nullable=false)
     */
    private $nombrepais;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;



    /**
     * Set nombrepais
     *
     * @param string $nombrepais
     *
     * @return Pais
     */
    public function setNombrepais($nombrepais)
    {
        $this->nombrepais = $nombrepais;

        return $this;
    }

    /**
     * Get nombrepais
     *
     * @return string
     */
    public function getNombrepais()
    {
        return $this->nombrepais;
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
}

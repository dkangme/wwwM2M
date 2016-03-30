<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Notificationlist
 *
 * @ORM\Table(name="NotificationList", uniqueConstraints={@ORM\UniqueConstraint(name="name_UNIQUE", columns={"name"})}, indexes={@ORM\Index(name="fk_NotificationList_notificationType1_idx", columns={"notificationType_idnotificationType"})})
 * @ORM\Entity
 */
class Notificationlist
{
    /**
     * @var string
     *
     * @ORM\Column(name="name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="list", type="string", length=512, nullable=true)
     */
    private $list;

    /**
     * @var integer
     *
     * @ORM\Column(name="idNotificationList", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idnotificationlist;

    /**
     * @var \AppBundle\Entity\Notificationtype
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Notificationtype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="notificationType_idnotificationType", referencedColumnName="idnotificationType")
     * })
     */
    private $notificationtypenotificationtype;



    /**
     * Set name
     *
     * @param string $name
     *
     * @return Notificationlist
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set list
     *
     * @param string $list
     *
     * @return Notificationlist
     */
    public function setList($list)
    {
        $this->list = $list;

        return $this;
    }

    /**
     * Get list
     *
     * @return string
     */
    public function getList()
    {
        return $this->list;
    }

    /**
     * Get idnotificationlist
     *
     * @return integer
     */
    public function getIdnotificationlist()
    {
        return $this->idnotificationlist;
    }

    /**
     * Set notificationtypenotificationtype
     *
     * @param \AppBundle\Entity\Notificationtype $notificationtypenotificationtype
     *
     * @return Notificationlist
     */
    public function setNotificationtypenotificationtype(\AppBundle\Entity\Notificationtype $notificationtypenotificationtype = null)
    {
        $this->notificationtypenotificationtype = $notificationtypenotificationtype;

        return $this;
    }

    /**
     * Get notificationtypenotificationtype
     *
     * @return \AppBundle\Entity\Notificationtype
     */
    public function getNotificationtypenotificationtype()
    {
        return $this->notificationtypenotificationtype;
    }
    /**
     * @var \AppBundle\Entity\Customer
     */
    private $customer;


    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     *
     * @return Notificationlist
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

<?php

namespace AppBundle\Entity;

/**
 * Notificationlist
 */
class Notificationlist
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $list;

    /**
     * @var integer
     */
    private $idnotificationlist;

    /**
     * @var \AppBundle\Entity\Notificationtype
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
}


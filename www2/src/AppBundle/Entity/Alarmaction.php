<?php

namespace AppBundle\Entity;

/**
 * Alarmaction
 */
class Alarmaction
{
    /**
     * @var integer
     */
    private $idalarmaction;

    /**
     * @var \AppBundle\Entity\Notificationlist
     */
    private $notificationlistnotificationlist;

    /**
     * @var \AppBundle\Entity\Alarm
     */
    private $alarmalarm;


    /**
     * Get idalarmaction
     *
     * @return integer
     */
    public function getIdalarmaction()
    {
        return $this->idalarmaction;
    }

    /**
     * Set notificationlistnotificationlist
     *
     * @param \AppBundle\Entity\Notificationlist $notificationlistnotificationlist
     *
     * @return Alarmaction
     */
    public function setNotificationlistnotificationlist(\AppBundle\Entity\Notificationlist $notificationlistnotificationlist = null)
    {
        $this->notificationlistnotificationlist = $notificationlistnotificationlist;

        return $this;
    }

    /**
     * Get notificationlistnotificationlist
     *
     * @return \AppBundle\Entity\Notificationlist
     */
    public function getNotificationlistnotificationlist()
    {
        return $this->notificationlistnotificationlist;
    }

    /**
     * Set alarmalarm
     *
     * @param \AppBundle\Entity\Alarm $alarmalarm
     *
     * @return Alarmaction
     */
    public function setAlarmalarm(\AppBundle\Entity\Alarm $alarmalarm = null)
    {
        $this->alarmalarm = $alarmalarm;

        return $this;
    }

    /**
     * Get alarmalarm
     *
     * @return \AppBundle\Entity\Alarm
     */
    public function getAlarmalarm()
    {
        return $this->alarmalarm;
    }
}


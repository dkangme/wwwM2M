<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alarmaction
 *
 * @ORM\Table(name="AlarmAction", indexes={@ORM\Index(name="fk_AlarmAction_Alarm1_idx", columns={"Alarm_idAlarm"}), @ORM\Index(name="fk_AlarmAction_NotificationList1_idx", columns={"NotificationList_idNotificationList"})})
 * @ORM\Entity
 */
class Alarmaction
{
    /**
     * @var integer
     *
     * @ORM\Column(name="idAlarmAction", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idalarmaction;

    /**
     * @var \AppBundle\Entity\Notificationlist
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Notificationlist")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="NotificationList_idNotificationList", referencedColumnName="idNotificationList")
     * })
     */
    private $notificationlistnotificationlist;

    /**
     * @var \AppBundle\Entity\Alarm
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Alarm")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Alarm_idAlarm", referencedColumnName="idAlarm")
     * })
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

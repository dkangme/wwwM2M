<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Alarm
 *
 * @ORM\Table(name="Alarm", indexes={@ORM\Index(name="fk_Alarm_Sensor1_idx", columns={"Sensor_idSensor"})})
 * @ORM\Entity
 */
class Alarm
{
    /**
     * @var string
     *
     * @ORM\Column(name="expression", type="string", length=256, nullable=true)
     */
    private $expression = '(%s==1)';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastAlarm", type="datetime", nullable=true)
     */
    private $lastalarm;

    /**
     * @var integer
     *
     * @ORM\Column(name="nextAlarmInterval", type="integer", nullable=false)
     */
    private $nextalarminterval = '10';

    /**
     * @var integer
     *
     * @ORM\Column(name="alarmLevel", type="integer", nullable=false)
     */
    private $alarmlevel = '1';

    /**
     * @var string
     *
     * @ORM\Column(name="description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="idAlarm", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idalarm;

    /**
     * @var \AppBundle\Entity\Sensor
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Sensor")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Sensor_idSensor", referencedColumnName="idSensor")
     * })
     */
    private $sensorsensor;



    /**
     * Set expression
     *
     * @param string $expression
     *
     * @return Alarm
     */
    public function setExpression($expression)
    {
        $this->expression = $expression;

        return $this;
    }

    /**
     * Get expression
     *
     * @return string
     */
    public function getExpression()
    {
        return $this->expression;
    }

    /**
     * Set lastalarm
     *
     * @param \DateTime $lastalarm
     *
     * @return Alarm
     */
    public function setLastalarm($lastalarm)
    {
        $this->lastalarm = $lastalarm;

        return $this;
    }

    /**
     * Get lastalarm
     *
     * @return \DateTime
     */
    public function getLastalarm()
    {
        return $this->lastalarm;
    }

    /**
     * Set nextalarminterval
     *
     * @param integer $nextalarminterval
     *
     * @return Alarm
     */
    public function setNextalarminterval($nextalarminterval)
    {
        $this->nextalarminterval = $nextalarminterval;

        return $this;
    }

    /**
     * Get nextalarminterval
     *
     * @return integer
     */
    public function getNextalarminterval()
    {
        return $this->nextalarminterval;
    }

    /**
     * Set alarmlevel
     *
     * @param integer $alarmlevel
     *
     * @return Alarm
     */
    public function setAlarmlevel($alarmlevel)
    {
        $this->alarmlevel = $alarmlevel;

        return $this;
    }

    /**
     * Get alarmlevel
     *
     * @return integer
     */
    public function getAlarmlevel()
    {
        return $this->alarmlevel;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Alarm
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Get idalarm
     *
     * @return integer
     */
    public function getIdalarm()
    {
        return $this->idalarm;
    }

    /**
     * Set sensorsensor
     *
     * @param \AppBundle\Entity\Sensor $sensorsensor
     *
     * @return Alarm
     */
    public function setSensorsensor(\AppBundle\Entity\Sensor $sensorsensor = null)
    {
        $this->sensorsensor = $sensorsensor;

        return $this;
    }

    /**
     * Get sensorsensor
     *
     * @return \AppBundle\Entity\Sensor
     */
    public function getSensorsensor()
    {
        return $this->sensorsensor;
    }
}

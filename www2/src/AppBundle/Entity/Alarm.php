<?php

namespace AppBundle\Entity;

/**
 * Alarm
 */
class Alarm
{
    /**
     * @var string
     */
    private $expression = '(%s==1)';

    /**
     * @var \DateTime
     */
    private $lastalarm;

    /**
     * @var integer
     */
    private $nextalarminterval = '10';

    /**
     * @var integer
     */
    private $idalarm;

    /**
     * @var \AppBundle\Entity\Sensor
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


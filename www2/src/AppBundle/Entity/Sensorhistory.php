<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sensorhistory
 *
 * @ORM\Table(name="SensorHistory", indexes={@ORM\Index(name="fk_SensorHistory_Sensor1_idx", columns={"Sensor_idSensor"})})
 * @ORM\Entity
 */
class Sensorhistory
{
    /**
     * @var float
     *
     * @ORM\Column(name="humanValue", type="float", precision=10, scale=0, nullable=false)
     */
    private $humanvalue;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="timeStamp", type="datetime", nullable=false)
     */
    private $timestamp;

    /**
     * @var integer
     *
     * @ORM\Column(name="idSensorHistory", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsensorhistory;

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
     * Get idsensorhistory
     *
     * @return integer
     */
    public function getIdsensorhistory()
    {
        return $this->idsensorhistory;
    }

    /**
     * Set humanvalue
     *
     * @param float $humanvalue
     *
     * @return Sensorhistory
     */
    public function setHumanvalue($humanvalue)
    {
        $this->humanvalue = $humanvalue;

        return $this;
    }

    /**
     * Get humanvalue
     *
     * @return float
     */
    public function getHumanvalue()
    {
        return $this->humanvalue;
    }

    /**
     * Set timestamp
     *
     * @param \DateTime $timestamp
     *
     * @return Sensorhistory
     */
    public function setTimestamp($timestamp)
    {
        $this->timestamp = $timestamp;

        return $this;
    }

    /**
     * Get timestamp
     *
     * @return \DateTime
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * Set sensorsensor
     *
     * @param \AppBundle\Entity\Sensor $sensorsensor
     *
     * @return Sensorhistory
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

<?php

namespace AppBundle\Entity;

/**
 * Sensorhistory
 */
class Sensorhistory
{
    /**
     * @var integer
     */
    private $idsensorhistory;

    /**
     * @var \AppBundle\Entity\Sensor
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

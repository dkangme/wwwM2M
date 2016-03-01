<?php

namespace AppBundle\Entity;

/**
 * Sensortype
 */
class Sensortype
{
    /**
     * @var string
     */
    private $name;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $standard;

    /**
     * @var float
     */
    private $minvalue = '0';

    /**
     * @var float
     */
    private $maxvalue = '0';

    /**
     * @var string
     */
    private $measurement = 'PPM';

    /**
     * @var integer
     */
    private $idsensortype;


    /**
     * Set name
     *
     * @param string $name
     *
     * @return Sensortype
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
     * Set description
     *
     * @param string $description
     *
     * @return Sensortype
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
     * Set standard
     *
     * @param string $standard
     *
     * @return Sensortype
     */
    public function setStandard($standard)
    {
        $this->standard = $standard;

        return $this;
    }

    /**
     * Get standard
     *
     * @return string
     */
    public function getStandard()
    {
        return $this->standard;
    }

    /**
     * Set minvalue
     *
     * @param float $minvalue
     *
     * @return Sensortype
     */
    public function setMinvalue($minvalue)
    {
        $this->minvalue = $minvalue;

        return $this;
    }

    /**
     * Get minvalue
     *
     * @return float
     */
    public function getMinvalue()
    {
        return $this->minvalue;
    }

    /**
     * Set maxvalue
     *
     * @param float $maxvalue
     *
     * @return Sensortype
     */
    public function setMaxvalue($maxvalue)
    {
        $this->maxvalue = $maxvalue;

        return $this;
    }

    /**
     * Get maxvalue
     *
     * @return float
     */
    public function getMaxvalue()
    {
        return $this->maxvalue;
    }

    /**
     * Set measurement
     *
     * @param string $measurement
     *
     * @return Sensortype
     */
    public function setMeasurement($measurement)
    {
        $this->measurement = $measurement;

        return $this;
    }

    /**
     * Get measurement
     *
     * @return string
     */
    public function getMeasurement()
    {
        return $this->measurement;
    }

    /**
     * Get idsensortype
     *
     * @return integer
     */
    public function getIdsensortype()
    {
        return $this->idsensortype;
    }
}


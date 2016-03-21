<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sensortype
 *
 * @ORM\Table(name="SensorType")
 * @ORM\Entity
 */
class Sensortype
{
    /**
     * @var string
     *
     * @ORM\Column(name="Name", type="string", length=45, nullable=false)
     */
    private $name;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=128, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Standard", type="string", length=45, nullable=true)
     */
    private $standard;

    /**
     * @var float
     *
     * @ORM\Column(name="minValue", type="float", precision=10, scale=0, nullable=false)
     */
    private $minvalue = '0';

    /**
     * @var float
     *
     * @ORM\Column(name="maxValue", type="float", precision=10, scale=0, nullable=false)
     */
    private $maxvalue = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="measurement", type="string", length=45, nullable=true)
     */
    private $measurement = 'PPM';

    /**
     * @var string
     *
     * @ORM\Column(name="cautionLevelFormula", type="string", length=45, nullable=false)
     */
    private $cautionlevelformula = '%s*1';

    /**
     * @var string
     *
     * @ORM\Column(name="warningLevelFormula", type="string", length=45, nullable=false)
     */
    private $warninglevelformula = '%s*1';

    /**
     * @var string
     *
     * @ORM\Column(name="alertLevelFormula", type="string", length=45, nullable=false)
     */
    private $alertlevelformula = '%s*1';

    /**
     * @var integer
     *
     * @ORM\Column(name="idSensorType", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
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
     * Set cautionlevelformula
     *
     * @param string $cautionlevelformula
     *
     * @return Sensortype
     */
    public function setCautionlevelformula($cautionlevelformula)
    {
        $this->cautionlevelformula = $cautionlevelformula;

        return $this;
    }

    /**
     * Get cautionlevelformula
     *
     * @return string
     */
    public function getCautionlevelformula()
    {
        return $this->cautionlevelformula;
    }

    /**
     * Set warninglevelformula
     *
     * @param string $warninglevelformula
     *
     * @return Sensortype
     */
    public function setWarninglevelformula($warninglevelformula)
    {
        $this->warninglevelformula = $warninglevelformula;

        return $this;
    }

    /**
     * Get warninglevelformula
     *
     * @return string
     */
    public function getWarninglevelformula()
    {
        return $this->warninglevelformula;
    }

    /**
     * Set alertlevelformula
     *
     * @param string $alertlevelformula
     *
     * @return Sensortype
     */
    public function setAlertlevelformula($alertlevelformula)
    {
        $this->alertlevelformula = $alertlevelformula;

        return $this;
    }

    /**
     * Get alertlevelformula
     *
     * @return string
     */
    public function getAlertlevelformula()
    {
        return $this->alertlevelformula;
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

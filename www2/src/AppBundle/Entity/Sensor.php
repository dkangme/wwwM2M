<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Sensor
 *
 * @ORM\Table(name="Sensor", indexes={@ORM\Index(name="fk_Sensor_WEI1_idx", columns={"WEI_idWEI"}), @ORM\Index(name="fk_Sensor_SensorType1_idx", columns={"SensorType_idSensorType"})})
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="AppBundle\Entity\SensorRepository")
 */
class Sensor
{
    /**
     * @var float
     *
     * @ORM\Column(name="humanValue", type="float", precision=10, scale=0, nullable=false)
     */
    private $humanvalue = '0';

    /**
     * @var integer
     *
     * @ORM\Column(name="Value", type="integer", nullable=false)
     */
    private $value = '0';

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastReport", type="datetime", nullable=false)
     */
    private $lastreport;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=45, nullable=true)
     */
    private $description;

    /**
     * @var integer
     *
     * @ORM\Column(name="alarmLevel", type="integer", nullable=false)
     */
    private $alarmlevel = '0';

    /**
     * @var string
     *
     * @ORM\Column(name="formula", type="string", length=45, nullable=false)
     */
    private $formula = '%s*1';

    /**
     * @var integer
     *
     * @ORM\Column(name="channelId", type="integer", nullable=false)
     */
    private $channelid = '1';

    /**
     * @var integer
     *
     * @ORM\Column(name="saveHistoryEvery", type="integer", nullable=true)
     */
    private $savehistoryevery = '5';

    /**
     * @var integer
     *
     * @ORM\Column(name="idSensor", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idsensor;

    /**
     * @var \AppBundle\Entity\Wei
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Wei")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="WEI_idWEI", referencedColumnName="idWEI")
     * })
     */
    private $weiwei;

    /**
     * @var \AppBundle\Entity\Sensortype
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Sensortype")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="SensorType_idSensorType", referencedColumnName="idSensorType")
     * })
     */
    private $sensortypesensortype;



    /**
     * Set humanvalue
     *
     * @param float $humanvalue
     *
     * @return Sensor
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
     * Set value
     *
     * @param integer $value
     *
     * @return Sensor
     */
    public function setValue($value)
    {
        $this->value = $value;

        return $this;
    }

    /**
     * Get value
     *
     * @return integer
     */
    public function getValue()
    {
        return $this->value;
    }

    /**
     * Set lastreport
     *
     * @param \DateTime $lastreport
     *
     * @return Sensor
     */
    public function setLastreport($lastreport)
    {
        $this->lastreport = $lastreport;

        return $this;
    }

    /**
     * Get lastreport
     *
     * @return \DateTime
     */
    public function getLastreport()
    {
        return $this->lastreport;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Sensor
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
     * Set alarmlevel
     *
     * @param integer $alarmlevel
     *
     * @return Sensor
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
     * Set formula
     *
     * @param string $formula
     *
     * @return Sensor
     */
    public function setFormula($formula)
    {
        $this->formula = $formula;

        return $this;
    }

    /**
     * Get formula
     *
     * @return string
     */
    public function getFormula()
    {
        return $this->formula;
    }

    /**
     * Set channelid
     *
     * @param integer $channelid
     *
     * @return Sensor
     */
    public function setChannelid($channelid)
    {
        $this->channelid = $channelid;

        return $this;
    }

    /**
     * Get channelid
     *
     * @return integer
     */
    public function getChannelid()
    {
        return $this->channelid;
    }

    /**
     * Set savehistoryevery
     *
     * @param integer $savehistoryevery
     *
     * @return Sensor
     */
    public function setSavehistoryevery($savehistoryevery)
    {
        $this->savehistoryevery = $savehistoryevery;

        return $this;
    }

    /**
     * Get savehistoryevery
     *
     * @return integer
     */
    public function getSavehistoryevery()
    {
        return $this->savehistoryevery;
    }

    /**
     * Get idsensor
     *
     * @return integer
     */
    public function getIdsensor()
    {
        return $this->idsensor;
    }

    /**
     * Set weiwei
     *
     * @param \AppBundle\Entity\Wei $weiwei
     *
     * @return Sensor
     */
    public function setWeiwei(\AppBundle\Entity\Wei $weiwei = null)
    {
        $this->weiwei = $weiwei;

        return $this;
    }

    /**
     * Get weiwei
     *
     * @return \AppBundle\Entity\Wei
     */
    public function getWeiwei()
    {
        return $this->weiwei;
    }

    /**
     * Set sensortypesensortype
     *
     * @param \AppBundle\Entity\Sensortype $sensortypesensortype
     *
     * @return Sensor
     */
    public function setSensortypesensortype(\AppBundle\Entity\Sensortype $sensortypesensortype = null)
    {
        $this->sensortypesensortype = $sensortypesensortype;

        return $this;
    }

    /**
     * Get sensortypesensortype
     *
     * @return \AppBundle\Entity\Sensortype
     */
    public function getSensortypesensortype()
    {
        return $this->sensortypesensortype;
    }
}

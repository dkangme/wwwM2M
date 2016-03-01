<?php

namespace AppBundle\Entity;

/**
 * Wei
 */
class Wei
{
    /**
     * @var string
     */
    private $nickname;

    /**
     * @var \DateTime
     */
    private $lastreport;

    /**
     * @var string
     */
    private $imei;

    /**
     * @var string
     */
    private $description;

    /**
     * @var string
     */
    private $operator;

    /**
     * @var \DateTime
     */
    private $activationdate;

    /**
     * @var \DateTime
     */
    private $modificationdate;

    /**
     * @var string
     */
    private $chipnumber;

    /**
     * @var integer
     */
    private $idwei;

    /**
     * @var \AppBundle\Entity\ModweiStatus
     */
    private $modweiStatus;

    /**
     * @var \AppBundle\Entity\Location
     */
    private $locationlocation;

    /**
     * @var \AppBundle\Entity\Customer
     */
    private $customer;


    /**
     * Set nickname
     *
     * @param string $nickname
     *
     * @return Wei
     */
    public function setNickname($nickname)
    {
        $this->nickname = $nickname;

        return $this;
    }

    /**
     * Get nickname
     *
     * @return string
     */
    public function getNickname()
    {
        return $this->nickname;
    }

    /**
     * Set lastreport
     *
     * @param \DateTime $lastreport
     *
     * @return Wei
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
     * Set imei
     *
     * @param string $imei
     *
     * @return Wei
     */
    public function setImei($imei)
    {
        $this->imei = $imei;

        return $this;
    }

    /**
     * Get imei
     *
     * @return string
     */
    public function getImei()
    {
        return $this->imei;
    }

    /**
     * Set description
     *
     * @param string $description
     *
     * @return Wei
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
     * Set operator
     *
     * @param string $operator
     *
     * @return Wei
     */
    public function setOperator($operator)
    {
        $this->operator = $operator;

        return $this;
    }

    /**
     * Get operator
     *
     * @return string
     */
    public function getOperator()
    {
        return $this->operator;
    }

    /**
     * Set activationdate
     *
     * @param \DateTime $activationdate
     *
     * @return Wei
     */
    public function setActivationdate($activationdate)
    {
        $this->activationdate = $activationdate;

        return $this;
    }

    /**
     * Get activationdate
     *
     * @return \DateTime
     */
    public function getActivationdate()
    {
        return $this->activationdate;
    }

    /**
     * Set modificationdate
     *
     * @param \DateTime $modificationdate
     *
     * @return Wei
     */
    public function setModificationdate($modificationdate)
    {
        $this->modificationdate = $modificationdate;

        return $this;
    }

    /**
     * Get modificationdate
     *
     * @return \DateTime
     */
    public function getModificationdate()
    {
        return $this->modificationdate;
    }

    /**
     * Set chipnumber
     *
     * @param string $chipnumber
     *
     * @return Wei
     */
    public function setChipnumber($chipnumber)
    {
        $this->chipnumber = $chipnumber;

        return $this;
    }

    /**
     * Get chipnumber
     *
     * @return string
     */
    public function getChipnumber()
    {
        return $this->chipnumber;
    }

    /**
     * Get idwei
     *
     * @return integer
     */
    public function getIdwei()
    {
        return $this->idwei;
    }

    /**
     * Set modweiStatus
     *
     * @param \AppBundle\Entity\ModweiStatus $modweiStatus
     *
     * @return Wei
     */
    public function setModweiStatus(\AppBundle\Entity\ModweiStatus $modweiStatus = null)
    {
        $this->modweiStatus = $modweiStatus;

        return $this;
    }

    /**
     * Get modweiStatus
     *
     * @return \AppBundle\Entity\ModweiStatus
     */
    public function getModweiStatus()
    {
        return $this->modweiStatus;
    }

    /**
     * Set locationlocation
     *
     * @param \AppBundle\Entity\Location $locationlocation
     *
     * @return Wei
     */
    public function setLocationlocation(\AppBundle\Entity\Location $locationlocation = null)
    {
        $this->locationlocation = $locationlocation;

        return $this;
    }

    /**
     * Get locationlocation
     *
     * @return \AppBundle\Entity\Location
     */
    public function getLocationlocation()
    {
        return $this->locationlocation;
    }

    /**
     * Set customer
     *
     * @param \AppBundle\Entity\Customer $customer
     *
     * @return Wei
     */
    public function setCustomer(\AppBundle\Entity\Customer $customer = null)
    {
        $this->customer = $customer;

        return $this;
    }

    /**
     * Get customer
     *
     * @return \AppBundle\Entity\Customer
     */
    public function getCustomer()
    {
        return $this->customer;
    }
}


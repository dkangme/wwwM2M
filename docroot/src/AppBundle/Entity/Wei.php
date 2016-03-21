<?php

namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Wei
 *
 * @ORM\Table(name="WEI", uniqueConstraints={@ORM\UniqueConstraint(name="nickName_UNIQUE", columns={"nickName"})}, indexes={@ORM\Index(name="fk_WEI_Location_idx", columns={"Location_idLocation"}), @ORM\Index(name="fk_WEI_ModWei_Status1_idx", columns={"ModWei_Status_id"}), @ORM\Index(name="fk_WEI_Customer1_idx", columns={"Customer_id"})})
 * @ORM\Entity
 */
class Wei
{
    /**
     * @var string
     *
     * @ORM\Column(name="nickName", type="string", length=24, nullable=false)
     */
    private $nickname;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="lastReport", type="datetime", nullable=true)
     */
    private $lastreport;

    /**
     * @var string
     *
     * @ORM\Column(name="IMEI", type="string", length=15, nullable=false)
     */
    private $imei;

    /**
     * @var string
     *
     * @ORM\Column(name="Description", type="string", length=128, nullable=true)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="Operator", type="string", length=45, nullable=true)
     */
    private $operator;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="activationDate", type="datetime", nullable=true)
     */
    private $activationdate;

    /**
     * @var \DateTime
     *
     * @ORM\Column(name="modificationDate", type="datetime", nullable=true)
     */
    private $modificationdate;

    /**
     * @var string
     *
     * @ORM\Column(name="chipNumber", type="string", length=45, nullable=true)
     */
    private $chipnumber;

    /**
     * @var integer
     *
     * @ORM\Column(name="idWEI", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $idwei;

    /**
     * @var \AppBundle\Entity\ModweiStatus
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\ModweiStatus")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="ModWei_Status_id", referencedColumnName="id")
     * })
     */
    private $modweiStatus;

    /**
     * @var \AppBundle\Entity\Location
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Location")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Location_idLocation", referencedColumnName="idLocation")
     * })
     */
    private $locationlocation;

    /**
     * @var \AppBundle\Entity\Customer
     *
     * @ORM\ManyToOne(targetEntity="AppBundle\Entity\Customer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="Customer_id", referencedColumnName="id")
     * })
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

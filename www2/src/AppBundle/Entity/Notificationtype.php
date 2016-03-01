<?php

namespace AppBundle\Entity;

/**
 * Notificationtype
 */
class Notificationtype
{
    /**
     * @var string
     */
    private $type;

    /**
     * @var string
     */
    private $remarks;

    /**
     * @var integer
     */
    private $idnotificationtype;


    /**
     * Set type
     *
     * @param string $type
     *
     * @return Notificationtype
     */
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get type
     *
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set remarks
     *
     * @param string $remarks
     *
     * @return Notificationtype
     */
    public function setRemarks($remarks)
    {
        $this->remarks = $remarks;

        return $this;
    }

    /**
     * Get remarks
     *
     * @return string
     */
    public function getRemarks()
    {
        return $this->remarks;
    }

    /**
     * Get idnotificationtype
     *
     * @return integer
     */
    public function getIdnotificationtype()
    {
        return $this->idnotificationtype;
    }
}


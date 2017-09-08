<?php

namespace AppBundle\Entity;

/**
 * Guest
 */
class Guest
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $guestName;

    /**
     * @var int
     */
    private $phoneNumber1;

    /**
     * @var int
     */
    private $phoneNumber2;

    /**
     * @var string
     */
    private $address1;

    /**
     * @var int
     */
    private $orgID;


    /**
     * Get id
     *
     * @return int
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set guestName
     *
     * @param string $guestName
     *
     * @return Guest
     */
    public function setGuestName($guestName)
    {
        $this->guestName = $guestName;

        return $this;
    }

    /**
     * Get guestName
     *
     * @return string
     */
    public function getGuestName()
    {
        return $this->guestName;
    }

    /**
     * Set phoneNumber1
     *
     * @param integer $phoneNumber1
     *
     * @return Guest
     */
    public function setPhoneNumber1($phoneNumber1)
    {
        $this->phoneNumber1 = $phoneNumber1;

        return $this;
    }

    /**
     * Get phoneNumber1
     *
     * @return int
     */
    public function getPhoneNumber1()
    {
        return $this->phoneNumber1;
    }

    /**
     * Set phoneNumber2
     *
     * @param integer $phoneNumber2
     *
     * @return Guest
     */
    public function setPhoneNumber2($phoneNumber2)
    {
        $this->phoneNumber2 = $phoneNumber2;

        return $this;
    }

    /**
     * Get phoneNumber2
     *
     * @return int
     */
    public function getPhoneNumber2()
    {
        return $this->phoneNumber2;
    }

    /**
     * Set address1
     *
     * @param string $address1
     *
     * @return Guest
     */
    public function setAddress1($address1)
    {
        $this->address1 = $address1;

        return $this;
    }

    /**
     * Get address1
     *
     * @return string
     */
    public function getAddress1()
    {
        return $this->address1;
    }

    /**
     * Set orgID
     *
     * @param integer $orgID
     *
     * @return Guest
     */
    public function setOrgID($orgID)
    {
        $this->orgID = $orgID;

        return $this;
    }

    /**
     * Get orgID
     *
     * @return int
     */
    public function getOrgID()
    {
        return $this->orgID;
    }
}


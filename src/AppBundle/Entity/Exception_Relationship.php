<?php

namespace AppBundle\Entity;

/**
 * Exception_Relationship
 */
class Exception_Relationship
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $relationshipType;

    /**
     * @var int
     */
    private $guestID1;

    /**
     * @var int
     */
    private $guestID2;

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
     * Set relationshipType
     *
     * @param string $relationshipType
     *
     * @return Exception_Relationship
     */
    public function setRelationshipType($relationshipType)
    {
        $this->relationshipType = $relationshipType;

        return $this;
    }

    /**
     * Get relationshipType
     *
     * @return string
     */
    public function getRelationshipType()
    {
        return $this->relationshipType;
    }

    /**
     * Set guestID1
     *
     * @param integer $guestID1
     *
     * @return Exception_Relationship
     */
    public function setGuestID1($guestID1)
    {
        $this->guestID1 = $guestID1;

        return $this;
    }

    /**
     * Get guestID1
     *
     * @return int
     */
    public function getGuestID1()
    {
        return $this->guestID1;
    }

    /**
     * Set guestID2
     *
     * @param integer $guestID2
     *
     * @return Exception_Relationship
     */
    public function setGuestID2($guestID2)
    {
        $this->guestID2 = $guestID2;

        return $this;
    }

    /**
     * Get guestID2
     *
     * @return int
     */
    public function getGuestID2()
    {
        return $this->guestID2;
    }

    /**
     * Set orgID
     *
     * @param integer $orgID
     *
     * @return Exception_Relationship
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


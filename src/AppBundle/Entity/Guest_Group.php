<?php

namespace AppBundle\Entity;

/**
 * Guest_Group
 */
class Guest_Group
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var string
     */
    private $groupName;

    /**
     * @var int
     */
    private $groupSequence;

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
     * Set groupName
     *
     * @param string $groupName
     *
     * @return Guest_Group
     */
    public function setGroupName($groupName)
    {
        $this->groupName = $groupName;

        return $this;
    }

    /**
     * Get groupName
     *
     * @return string
     */
    public function getGroupName()
    {
        return $this->groupName;
    }

    /**
     * Set groupSequence
     *
     * @param integer $groupSequence
     *
     * @return Guest_Group
     */
    public function setGroupSequence($groupSequence)
    {
        $this->groupSequence = $groupSequence;

        return $this;
    }

    /**
     * Get groupSequence
     *
     * @return int
     */
    public function getGroupSequence()
    {
        return $this->groupSequence;
    }

    /**
     * Set orgID
     *
     * @param integer $orgID
     *
     * @return Guest_Group
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


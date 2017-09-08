<?php

namespace AppBundle\Entity;

/**
 * Table_List
 */
class Table_List
{
    /**
     * @var int
     */
    private $id;

    /**
     * @var int
     */
    private $tableNumber;

    /**
     * @var string
     */
    private $tableName;

    /**
     * @var int
     */
    private $guestID;

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
     * Set tableNumber
     *
     * @param integer $tableNumber
     *
     * @return Table_List
     */
    public function setTableNumber($tableNumber)
    {
        $this->tableNumber = $tableNumber;

        return $this;
    }

    /**
     * Get tableNumber
     *
     * @return int
     */
    public function getTableNumber()
    {
        return $this->tableNumber;
    }

    /**
     * Set tableName
     *
     * @param string $tableName
     *
     * @return Table_List
     */
    public function setTableName($tableName)
    {
        $this->tableName = $tableName;

        return $this;
    }

    /**
     * Get tableName
     *
     * @return string
     */
    public function getTableName()
    {
        return $this->tableName;
    }

    /**
     * Set guestID
     *
     * @param integer $guestID
     *
     * @return Table_List
     */
    public function setGuestID($guestID)
    {
        $this->guestID = $guestID;

        return $this;
    }

    /**
     * Get guestID
     *
     * @return int
     */
    public function getGuestID()
    {
        return $this->guestID;
    }

    /**
     * Set orgID
     *
     * @param integer $orgID
     *
     * @return Table_List
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


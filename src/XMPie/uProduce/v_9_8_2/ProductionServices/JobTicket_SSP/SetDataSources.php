<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetDataSources
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var string $inTicketID
     */
    protected $inTicketID = null;

    /**
     * @var ArrayOfString $inSchemaNameArray
     */
    protected $inSchemaNameArray = null;

    /**
     * @var ArrayOfConnection $inConnections
     */
    protected $inConnections = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param ArrayOfString $inSchemaNameArray
     * @param ArrayOfConnection $inConnections
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inSchemaNameArray = null, $inConnections = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inSchemaNameArray = $inSchemaNameArray;
        $this->inConnections = $inConnections;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
        return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return SetDataSources
     */
    public function setInUsername($inUsername)
    {
        $this->inUsername = $inUsername;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
        return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return SetDataSources
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInTicketID()
    {
        return $this->inTicketID;
    }

    /**
     * @param string $inTicketID
     * @return SetDataSources
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInSchemaNameArray()
    {
        return $this->inSchemaNameArray;
    }

    /**
     * @param ArrayOfString $inSchemaNameArray
     * @return SetDataSources
     */
    public function setInSchemaNameArray($inSchemaNameArray)
    {
        $this->inSchemaNameArray = $inSchemaNameArray;
        return $this;
    }

    /**
     * @return ArrayOfConnection
     */
    public function getInConnections()
    {
        return $this->inConnections;
    }

    /**
     * @param ArrayOfConnection $inConnections
     * @return SetDataSources
     */
    public function setInConnections($inConnections)
    {
        $this->inConnections = $inConnections;
        return $this;
    }

}

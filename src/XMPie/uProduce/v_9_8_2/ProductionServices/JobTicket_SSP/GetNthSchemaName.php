<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetNthSchemaName
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
     * @var int $inSchemaIndex
     */
    protected $inSchemaIndex = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param int $inSchemaIndex
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inSchemaIndex = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inSchemaIndex = $inSchemaIndex;
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
     * @return GetNthSchemaName
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
     * @return GetNthSchemaName
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
     * @return GetNthSchemaName
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return int
     */
    public function getInSchemaIndex()
    {
        return $this->inSchemaIndex;
    }

    /**
     * @param int $inSchemaIndex
     * @return GetNthSchemaName
     */
    public function setInSchemaIndex($inSchemaIndex)
    {
        $this->inSchemaIndex = $inSchemaIndex;
        return $this;
    }

}

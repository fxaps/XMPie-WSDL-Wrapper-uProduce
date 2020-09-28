<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class OverwriteTicketInDB
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
     * @var string $inTicketName
     */
    protected $inTicketName = null;

    /**
     * @var string $inTicketGuid
     */
    protected $inTicketGuid = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inTicketName
     * @param string $inTicketGuid
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inTicketName = null, $inTicketGuid = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inTicketName = $inTicketName;
        $this->inTicketGuid = $inTicketGuid;
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
     * @return OverwriteTicketInDB
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
     * @return OverwriteTicketInDB
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
     * @return OverwriteTicketInDB
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInTicketName()
    {
        return $this->inTicketName;
    }

    /**
     * @param string $inTicketName
     * @return OverwriteTicketInDB
     */
    public function setInTicketName($inTicketName)
    {
        $this->inTicketName = $inTicketName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInTicketGuid()
    {
        return $this->inTicketGuid;
    }

    /**
     * @param string $inTicketGuid
     * @return OverwriteTicketInDB
     */
    public function setInTicketGuid($inTicketGuid)
    {
        $this->inTicketGuid = $inTicketGuid;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveCustomization
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
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var string $inType
     */
    protected $inType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inName
     * @param string $inType
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inName = null, $inType = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inName = $inName;
        $this->inType = $inType;
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
     * @return RemoveCustomization
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
     * @return RemoveCustomization
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
     * @return RemoveCustomization
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInName()
    {
        return $this->inName;
    }

    /**
     * @param string $inName
     * @return RemoveCustomization
     */
    public function setInName($inName)
    {
        $this->inName = $inName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInType()
    {
        return $this->inType;
    }

    /**
     * @param string $inType
     * @return RemoveCustomization
     */
    public function setInType($inType)
    {
        $this->inType = $inType;
        return $this;
    }

}

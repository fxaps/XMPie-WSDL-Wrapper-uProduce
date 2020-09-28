<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SaveNewTicketToDB
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
     * @var string $inAccountID
     */
    protected $inAccountID = null;

    /**
     * @var boolean $inIsTemplate
     */
    protected $inIsTemplate = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inTicketName
     * @param string $inAccountID
     * @param boolean $inIsTemplate
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inTicketName = null, $inAccountID = null, $inIsTemplate = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inTicketName = $inTicketName;
        $this->inAccountID = $inAccountID;
        $this->inIsTemplate = $inIsTemplate;
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
     * @return SaveNewTicketToDB
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
     * @return SaveNewTicketToDB
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
     * @return SaveNewTicketToDB
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
     * @return SaveNewTicketToDB
     */
    public function setInTicketName($inTicketName)
    {
        $this->inTicketName = $inTicketName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInAccountID()
    {
        return $this->inAccountID;
    }

    /**
     * @param string $inAccountID
     * @return SaveNewTicketToDB
     */
    public function setInAccountID($inAccountID)
    {
        $this->inAccountID = $inAccountID;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInIsTemplate()
    {
        return $this->inIsTemplate;
    }

    /**
     * @param boolean $inIsTemplate
     * @return SaveNewTicketToDB
     */
    public function setInIsTemplate($inIsTemplate)
    {
        $this->inIsTemplate = $inIsTemplate;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class AddSecondaryRemoteCopy
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
     * @var string $inDestination
     */
    protected $inDestination = null;

    /**
     * @var boolean $inDeleteSource
     */
    protected $inDeleteSource = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inDestination
     * @param boolean $inDeleteSource
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inDestination = null, $inDeleteSource = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inDestination = $inDestination;
        $this->inDeleteSource = $inDeleteSource;
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
     * @return AddSecondaryRemoteCopy
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
     * @return AddSecondaryRemoteCopy
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
     * @return AddSecondaryRemoteCopy
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDestination()
    {
        return $this->inDestination;
    }

    /**
     * @param string $inDestination
     * @return AddSecondaryRemoteCopy
     */
    public function setInDestination($inDestination)
    {
        $this->inDestination = $inDestination;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInDeleteSource()
    {
        return $this->inDeleteSource;
    }

    /**
     * @param boolean $inDeleteSource
     * @return AddSecondaryRemoteCopy
     */
    public function setInDeleteSource($inDeleteSource)
    {
        $this->inDeleteSource = $inDeleteSource;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetTicketPropertyFromDB
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
     * @var string $inTicketGuid
     */
    protected $inTicketGuid = null;

    /**
     * @var string $inProperty
     */
    protected $inProperty = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketGuid
     * @param string $inProperty
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketGuid = null, $inProperty = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketGuid = $inTicketGuid;
        $this->inProperty = $inProperty;
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
     * @return GetTicketPropertyFromDB
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
     * @return GetTicketPropertyFromDB
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
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
     * @return GetTicketPropertyFromDB
     */
    public function setInTicketGuid($inTicketGuid)
    {
        $this->inTicketGuid = $inTicketGuid;
        return $this;
    }

    /**
     * @return string
     */
    public function getInProperty()
    {
        return $this->inProperty;
    }

    /**
     * @param string $inProperty
     * @return GetTicketPropertyFromDB
     */
    public function setInProperty($inProperty)
    {
        $this->inProperty = $inProperty;
        return $this;
    }

}

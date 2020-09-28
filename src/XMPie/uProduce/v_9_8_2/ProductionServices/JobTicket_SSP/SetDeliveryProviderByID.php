<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetDeliveryProviderByID
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
     * @var string $inDeliveryProviderID
     */
    protected $inDeliveryProviderID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inDeliveryProviderID
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inDeliveryProviderID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inDeliveryProviderID = $inDeliveryProviderID;
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
     * @return SetDeliveryProviderByID
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
     * @return SetDeliveryProviderByID
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
     * @return SetDeliveryProviderByID
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDeliveryProviderID()
    {
        return $this->inDeliveryProviderID;
    }

    /**
     * @param string $inDeliveryProviderID
     * @return SetDeliveryProviderByID
     */
    public function setInDeliveryProviderID($inDeliveryProviderID)
    {
        $this->inDeliveryProviderID = $inDeliveryProviderID;
        return $this;
    }

}

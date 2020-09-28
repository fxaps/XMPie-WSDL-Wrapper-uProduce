<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetFieldMapping
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
     * @var FieldMappings $inFieldMapping
     */
    protected $inFieldMapping = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param FieldMappings $inFieldMapping
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inFieldMapping = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inFieldMapping = $inFieldMapping;
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
     * @return SetFieldMapping
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
     * @return SetFieldMapping
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
     * @return SetFieldMapping
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return FieldMappings
     */
    public function getInFieldMapping()
    {
        return $this->inFieldMapping;
    }

    /**
     * @param FieldMappings $inFieldMapping
     * @return SetFieldMapping
     */
    public function setInFieldMapping($inFieldMapping)
    {
        $this->inFieldMapping = $inFieldMapping;
        return $this;
    }

}

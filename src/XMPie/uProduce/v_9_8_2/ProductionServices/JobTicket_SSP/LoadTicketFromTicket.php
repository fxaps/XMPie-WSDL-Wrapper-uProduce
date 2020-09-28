<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class LoadTicketFromTicket
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
     * @var string $inTicket
     */
    protected $inTicket = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicket
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicket = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicket = $inTicket;
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
     * @return LoadTicketFromTicket
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
     * @return LoadTicketFromTicket
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInTicket()
    {
        return $this->inTicket;
    }

    /**
     * @param string $inTicket
     * @return LoadTicketFromTicket
     */
    public function setInTicket($inTicket)
    {
        $this->inTicket = $inTicket;
        return $this;
    }

}

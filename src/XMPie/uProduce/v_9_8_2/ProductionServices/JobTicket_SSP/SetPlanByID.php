<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetPlanByID
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
     * @var string $inPlanID
     */
    protected $inPlanID = null;

    /**
     * @var boolean $inUseTrivial
     */
    protected $inUseTrivial = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inPlanID
     * @param boolean $inUseTrivial
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inPlanID = null, $inUseTrivial = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inPlanID = $inPlanID;
        $this->inUseTrivial = $inUseTrivial;
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
     * @return SetPlanByID
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
     * @return SetPlanByID
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
     * @return SetPlanByID
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPlanID()
    {
        return $this->inPlanID;
    }

    /**
     * @param string $inPlanID
     * @return SetPlanByID
     */
    public function setInPlanID($inPlanID)
    {
        $this->inPlanID = $inPlanID;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInUseTrivial()
    {
        return $this->inUseTrivial;
    }

    /**
     * @param boolean $inUseTrivial
     * @return SetPlanByID
     */
    public function setInUseTrivial($inUseTrivial)
    {
        $this->inUseTrivial = $inUseTrivial;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetTicketDefaultsForPlan
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
     * @var string $inRITableName
     */
    protected $inRITableName = null;

    /**
     * @var boolean $inFlatOriented
     */
    protected $inFlatOriented = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inPlanID
     * @param string $inRITableName
     * @param boolean $inFlatOriented
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inPlanID = null, $inRITableName = null, $inFlatOriented = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inPlanID = $inPlanID;
        $this->inRITableName = $inRITableName;
        $this->inFlatOriented = $inFlatOriented;
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
     * @return SetTicketDefaultsForPlan
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
     * @return SetTicketDefaultsForPlan
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
     * @return SetTicketDefaultsForPlan
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
     * @return SetTicketDefaultsForPlan
     */
    public function setInPlanID($inPlanID)
    {
        $this->inPlanID = $inPlanID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInRITableName()
    {
        return $this->inRITableName;
    }

    /**
     * @param string $inRITableName
     * @return SetTicketDefaultsForPlan
     */
    public function setInRITableName($inRITableName)
    {
        $this->inRITableName = $inRITableName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInFlatOriented()
    {
        return $this->inFlatOriented;
    }

    /**
     * @param boolean $inFlatOriented
     * @return SetTicketDefaultsForPlan
     */
    public function setInFlatOriented($inFlatOriented)
    {
        $this->inFlatOriented = $inFlatOriented;
        return $this;
    }

}

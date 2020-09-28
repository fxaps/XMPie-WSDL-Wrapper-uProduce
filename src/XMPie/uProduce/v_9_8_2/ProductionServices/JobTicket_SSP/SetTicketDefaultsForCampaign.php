<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetTicketDefaultsForCampaign
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
     * @var string $inCampaignID
     */
    protected $inCampaignID = null;

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
     * @param string $inCampaignID
     * @param string $inRITableName
     * @param boolean $inFlatOriented
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inCampaignID = null, $inRITableName = null, $inFlatOriented = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inCampaignID = $inCampaignID;
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
     * @return SetTicketDefaultsForCampaign
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
     * @return SetTicketDefaultsForCampaign
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
     * @return SetTicketDefaultsForCampaign
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignID()
    {
        return $this->inCampaignID;
    }

    /**
     * @param string $inCampaignID
     * @return SetTicketDefaultsForCampaign
     */
    public function setInCampaignID($inCampaignID)
    {
        $this->inCampaignID = $inCampaignID;
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
     * @return SetTicketDefaultsForCampaign
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
     * @return SetTicketDefaultsForCampaign
     */
    public function setInFlatOriented($inFlatOriented)
    {
        $this->inFlatOriented = $inFlatOriented;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Tracker_SSP;

class Delete
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
     * @var string $inCampaignID
     */
    protected $inCampaignID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inCampaignID = $inCampaignID;
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
     * @return Delete
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
     * @return Delete
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
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
     * @return Delete
     */
    public function setInCampaignID($inCampaignID)
    {
        $this->inCampaignID = $inCampaignID;
        return $this;
    }

}

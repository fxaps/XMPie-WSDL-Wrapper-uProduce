<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Account_SSP;

class GetCampaignID
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
     * @var string $inAccountID
     */
    protected $inAccountID = null;

    /**
     * @var string $inCampaignName
     */
    protected $inCampaignName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountID
     * @param string $inCampaignName
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountID = null, $inCampaignName = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inAccountID = $inAccountID;
        $this->inCampaignName = $inCampaignName;
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
     * @return GetCampaignID
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
     * @return GetCampaignID
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
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
     * @return GetCampaignID
     */
    public function setInAccountID($inAccountID)
    {
        $this->inAccountID = $inAccountID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInCampaignName()
    {
        return $this->inCampaignName;
    }

    /**
     * @param string $inCampaignName
     * @return GetCampaignID
     */
    public function setInCampaignName($inCampaignName)
    {
        $this->inCampaignName = $inCampaignName;
        return $this;
    }

}

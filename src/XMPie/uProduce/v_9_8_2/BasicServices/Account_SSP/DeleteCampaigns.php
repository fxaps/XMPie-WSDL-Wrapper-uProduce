<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Account_SSP;

class DeleteCampaigns
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
     * @var ArrayOfString $inCampaignIDArray
     */
    protected $inCampaignIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountID
     * @param ArrayOfString $inCampaignIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountID = null, $inCampaignIDArray = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inAccountID = $inAccountID;
        $this->inCampaignIDArray = $inCampaignIDArray;
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
     * @return DeleteCampaigns
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
     * @return DeleteCampaigns
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
     * @return DeleteCampaigns
     */
    public function setInAccountID($inAccountID)
    {
        $this->inAccountID = $inAccountID;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInCampaignIDArray()
    {
        return $this->inCampaignIDArray;
    }

    /**
     * @param ArrayOfString $inCampaignIDArray
     * @return DeleteCampaigns
     */
    public function setInCampaignIDArray($inCampaignIDArray)
    {
        $this->inCampaignIDArray = $inCampaignIDArray;
        return $this;
    }

}

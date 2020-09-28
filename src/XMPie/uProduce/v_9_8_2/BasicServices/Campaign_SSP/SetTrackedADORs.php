<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class SetTrackedADORs
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
     * @var ArrayOfString $inAdorNames
     */
    protected $inAdorNames = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param ArrayOfString $inAdorNames
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inAdorNames = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inCampaignID = $inCampaignID;
        $this->inAdorNames = $inAdorNames;
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
     * @return SetTrackedADORs
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
     * @return SetTrackedADORs
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
     * @return SetTrackedADORs
     */
    public function setInCampaignID($inCampaignID)
    {
        $this->inCampaignID = $inCampaignID;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInAdorNames()
    {
        return $this->inAdorNames;
    }

    /**
     * @param ArrayOfString $inAdorNames
     * @return SetTrackedADORs
     */
    public function setInAdorNames($inAdorNames)
    {
        $this->inAdorNames = $inAdorNames;
        return $this;
    }

}

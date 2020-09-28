<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class DeletePopulations
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
     * @var ArrayOfString $inPopulationGUIDArray
     */
    protected $inPopulationGUIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param ArrayOfString $inPopulationGUIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inPopulationGUIDArray = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inCampaignID = $inCampaignID;
        $this->inPopulationGUIDArray = $inPopulationGUIDArray;
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
     * @return DeletePopulations
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
     * @return DeletePopulations
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
     * @return DeletePopulations
     */
    public function setInCampaignID($inCampaignID)
    {
        $this->inCampaignID = $inCampaignID;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInPopulationGUIDArray()
    {
        return $this->inPopulationGUIDArray;
    }

    /**
     * @param ArrayOfString $inPopulationGUIDArray
     * @return DeletePopulations
     */
    public function setInPopulationGUIDArray($inPopulationGUIDArray)
    {
        $this->inPopulationGUIDArray = $inPopulationGUIDArray;
        return $this;
    }

}

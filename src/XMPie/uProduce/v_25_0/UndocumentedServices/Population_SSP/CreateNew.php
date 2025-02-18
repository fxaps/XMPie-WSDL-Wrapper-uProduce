<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP;

class CreateNew
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
     * @var string $inExternalId
     */
    protected $inExternalId = null;

    /**
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var PopulationInfo $inPopulationInfo
     */
    protected $inPopulationInfo = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inExternalId
     * @param string $inName
     * @param PopulationInfo $inPopulationInfo
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inExternalId = null, $inName = null, $inPopulationInfo = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inExternalId = $inExternalId;
      $this->inName = $inName;
      $this->inPopulationInfo = $inPopulationInfo;
      $this->inProps = $inProps;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\CreateNew
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\CreateNew
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\CreateNew
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInExternalId()
    {
      return $this->inExternalId;
    }

    /**
     * @param string $inExternalId
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\CreateNew
     */
    public function setInExternalId($inExternalId)
    {
      $this->inExternalId = $inExternalId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInName()
    {
      return $this->inName;
    }

    /**
     * @param string $inName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\CreateNew
     */
    public function setInName($inName)
    {
      $this->inName = $inName;
      return $this;
    }

    /**
     * @return PopulationInfo
     */
    public function getInPopulationInfo()
    {
      return $this->inPopulationInfo;
    }

    /**
     * @param PopulationInfo $inPopulationInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\CreateNew
     */
    public function setInPopulationInfo($inPopulationInfo)
    {
      $this->inPopulationInfo = $inPopulationInfo;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProps()
    {
      return $this->inProps;
    }

    /**
     * @param ArrayOfProperty $inProps
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\CreateNew
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}

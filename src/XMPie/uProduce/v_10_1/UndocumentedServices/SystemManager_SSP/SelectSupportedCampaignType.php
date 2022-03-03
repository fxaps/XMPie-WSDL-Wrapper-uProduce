<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\SystemManager_SSP;

class SelectSupportedCampaignType
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
     * @var int $inCampaignType
     */
    protected $inCampaignType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param int $inCampaignType
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignType = $inCampaignType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\SystemManager_SSP\SelectSupportedCampaignType
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\SystemManager_SSP\SelectSupportedCampaignType
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return int
     */
    public function getInCampaignType()
    {
      return $this->inCampaignType;
    }

    /**
     * @param int $inCampaignType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\SystemManager_SSP\SelectSupportedCampaignType
     */
    public function setInCampaignType($inCampaignType)
    {
      $this->inCampaignType = $inCampaignType;
      return $this;
    }

}

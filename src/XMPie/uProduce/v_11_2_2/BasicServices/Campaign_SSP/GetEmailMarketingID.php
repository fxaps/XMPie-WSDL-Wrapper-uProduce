<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Campaign_SSP;

class GetEmailMarketingID
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
     * @var string $inEmailMarketingName
     */
    protected $inEmailMarketingName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param string $inEmailMarketingName
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inEmailMarketingName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inEmailMarketingName = $inEmailMarketingName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Campaign_SSP\GetEmailMarketingID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Campaign_SSP\GetEmailMarketingID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Campaign_SSP\GetEmailMarketingID
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEmailMarketingName()
    {
      return $this->inEmailMarketingName;
    }

    /**
     * @param string $inEmailMarketingName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Campaign_SSP\GetEmailMarketingID
     */
    public function setInEmailMarketingName($inEmailMarketingName)
    {
      $this->inEmailMarketingName = $inEmailMarketingName;
      return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\EmailMarketing_SSP;

class GetEmailHeader
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
     * @var string $inAccountName
     */
    protected $inAccountName = null;

    /**
     * @var string $inCampaignName
     */
    protected $inCampaignName = null;

    /**
     * @var string $inEmailActivityName
     */
    protected $inEmailActivityName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountName
     * @param string $inCampaignName
     * @param string $inEmailActivityName
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountName = null, $inCampaignName = null, $inEmailActivityName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountName = $inAccountName;
      $this->inCampaignName = $inCampaignName;
      $this->inEmailActivityName = $inEmailActivityName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\EmailMarketing_SSP\GetEmailHeader
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\EmailMarketing_SSP\GetEmailHeader
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAccountName()
    {
      return $this->inAccountName;
    }

    /**
     * @param string $inAccountName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\EmailMarketing_SSP\GetEmailHeader
     */
    public function setInAccountName($inAccountName)
    {
      $this->inAccountName = $inAccountName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\EmailMarketing_SSP\GetEmailHeader
     */
    public function setInCampaignName($inCampaignName)
    {
      $this->inCampaignName = $inCampaignName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEmailActivityName()
    {
      return $this->inEmailActivityName;
    }

    /**
     * @param string $inEmailActivityName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\EmailMarketing_SSP\GetEmailHeader
     */
    public function setInEmailActivityName($inEmailActivityName)
    {
      $this->inEmailActivityName = $inEmailActivityName;
      return $this;
    }

}

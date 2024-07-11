<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\Campaign_SSP;

class GetFieldNames
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
     * @var boolean $inIncludeInternal
     */
    protected $inIncludeInternal = null;

    /**
     * @var boolean $inIncludeNonePlanDefined
     */
    protected $inIncludeNonePlanDefined = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param boolean $inIncludeInternal
     * @param boolean $inIncludeNonePlanDefined
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inIncludeInternal = null, $inIncludeNonePlanDefined = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inIncludeInternal = $inIncludeInternal;
      $this->inIncludeNonePlanDefined = $inIncludeNonePlanDefined;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\Campaign_SSP\GetFieldNames
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\Campaign_SSP\GetFieldNames
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\Campaign_SSP\GetFieldNames
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIncludeInternal()
    {
      return $this->inIncludeInternal;
    }

    /**
     * @param boolean $inIncludeInternal
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\Campaign_SSP\GetFieldNames
     */
    public function setInIncludeInternal($inIncludeInternal)
    {
      $this->inIncludeInternal = $inIncludeInternal;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInIncludeNonePlanDefined()
    {
      return $this->inIncludeNonePlanDefined;
    }

    /**
     * @param boolean $inIncludeNonePlanDefined
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\BasicServices\Campaign_SSP\GetFieldNames
     */
    public function setInIncludeNonePlanDefined($inIncludeNonePlanDefined)
    {
      $this->inIncludeNonePlanDefined = $inIncludeNonePlanDefined;
      return $this;
    }

}

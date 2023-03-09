<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Plan_SSP;

class CloneCustom
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
     * @var string $inPlanID
     */
    protected $inPlanID = null;

    /**
     * @var string $inTargetCampaignID
     */
    protected $inTargetCampaignID = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     * @param string $inTargetCampaignID
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null, $inTargetCampaignID = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPlanID = $inPlanID;
      $this->inTargetCampaignID = $inTargetCampaignID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Plan_SSP\Clone
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Plan_SSP\Clone
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPlanID()
    {
      return $this->inPlanID;
    }

    /**
     * @param string $inPlanID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Plan_SSP\Clone
     */
    public function setInPlanID($inPlanID)
    {
      $this->inPlanID = $inPlanID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTargetCampaignID()
    {
      return $this->inTargetCampaignID;
    }

    /**
     * @param string $inTargetCampaignID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Plan_SSP\Clone
     */
    public function setInTargetCampaignID($inTargetCampaignID)
    {
      $this->inTargetCampaignID = $inTargetCampaignID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\Plan_SSP\Clone
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}

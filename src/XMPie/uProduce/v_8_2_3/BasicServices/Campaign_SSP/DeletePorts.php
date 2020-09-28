<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\Campaign_SSP;

class DeletePorts
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
     * @var ArrayOfString $inPortIDArray
     */
    protected $inPortIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCampaignID
     * @param ArrayOfString $inPortIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inPortIDArray = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inCampaignID = $inCampaignID;
      $this->inPortIDArray = $inPortIDArray;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\Campaign_SSP\DeletePorts
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\Campaign_SSP\DeletePorts
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\Campaign_SSP\DeletePorts
     */
    public function setInCampaignID($inCampaignID)
    {
      $this->inCampaignID = $inCampaignID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInPortIDArray()
    {
      return $this->inPortIDArray;
    }

    /**
     * @param ArrayOfString $inPortIDArray
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\Campaign_SSP\DeletePorts
     */
    public function setInPortIDArray($inPortIDArray)
    {
      $this->inPortIDArray = $inPortIDArray;
      return $this;
    }

}

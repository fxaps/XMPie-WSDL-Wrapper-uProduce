<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\JobTicket_SSP;

class SetAssetSourceEx
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
     * @var string $inTicketID
     */
    protected $inTicketID = null;

    /**
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var AssetSourceInfo $inAssetSourceInfo
     */
    protected $inAssetSourceInfo = null;

    /**
     * @var int $inPriority
     */
    protected $inPriority = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inName
     * @param AssetSourceInfo $inAssetSourceInfo
     * @param int $inPriority
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inName = null, $inAssetSourceInfo = null, $inPriority = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inName = $inName;
      $this->inAssetSourceInfo = $inAssetSourceInfo;
      $this->inPriority = $inPriority;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\JobTicket_SSP\SetAssetSourceEx
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\JobTicket_SSP\SetAssetSourceEx
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTicketID()
    {
      return $this->inTicketID;
    }

    /**
     * @param string $inTicketID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\JobTicket_SSP\SetAssetSourceEx
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\JobTicket_SSP\SetAssetSourceEx
     */
    public function setInName($inName)
    {
      $this->inName = $inName;
      return $this;
    }

    /**
     * @return AssetSourceInfo
     */
    public function getInAssetSourceInfo()
    {
      return $this->inAssetSourceInfo;
    }

    /**
     * @param AssetSourceInfo $inAssetSourceInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\JobTicket_SSP\SetAssetSourceEx
     */
    public function setInAssetSourceInfo($inAssetSourceInfo)
    {
      $this->inAssetSourceInfo = $inAssetSourceInfo;
      return $this;
    }

    /**
     * @return int
     */
    public function getInPriority()
    {
      return $this->inPriority;
    }

    /**
     * @param int $inPriority
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\JobTicket_SSP\SetAssetSourceEx
     */
    public function setInPriority($inPriority)
    {
      $this->inPriority = $inPriority;
      return $this;
    }

}

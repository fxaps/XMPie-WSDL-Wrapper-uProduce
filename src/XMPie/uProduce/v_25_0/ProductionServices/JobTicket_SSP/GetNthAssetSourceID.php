<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP;

class GetNthAssetSourceID
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
     * @var int $inAssetSourceIndex
     */
    protected $inAssetSourceIndex = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param int $inAssetSourceIndex
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inAssetSourceIndex = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inAssetSourceIndex = $inAssetSourceIndex;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP\GetNthAssetSourceID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP\GetNthAssetSourceID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP\GetNthAssetSourceID
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return int
     */
    public function getInAssetSourceIndex()
    {
      return $this->inAssetSourceIndex;
    }

    /**
     * @param int $inAssetSourceIndex
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP\GetNthAssetSourceID
     */
    public function setInAssetSourceIndex($inAssetSourceIndex)
    {
      $this->inAssetSourceIndex = $inAssetSourceIndex;
      return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\ProductionServices\JobTicket_SSP;

class GetNthFilterOutADOR
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
     * @var int $inADORIndex
     */
    protected $inADORIndex = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param int $inADORIndex
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inADORIndex = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inADORIndex = $inADORIndex;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\ProductionServices\JobTicket_SSP\GetNthFilterOutADOR
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\ProductionServices\JobTicket_SSP\GetNthFilterOutADOR
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\ProductionServices\JobTicket_SSP\GetNthFilterOutADOR
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return int
     */
    public function getInADORIndex()
    {
      return $this->inADORIndex;
    }

    /**
     * @param int $inADORIndex
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\ProductionServices\JobTicket_SSP\GetNthFilterOutADOR
     */
    public function setInADORIndex($inADORIndex)
    {
      $this->inADORIndex = $inADORIndex;
      return $this;
    }

}

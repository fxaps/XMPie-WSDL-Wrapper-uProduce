<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveFilterOutADOR
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
     * @var string $inADOR
     */
    protected $inADOR = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inADOR
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inADOR = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inADOR = $inADOR;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP\RemoveFilterOutADOR
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP\RemoveFilterOutADOR
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP\RemoveFilterOutADOR
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInADOR()
    {
      return $this->inADOR;
    }

    /**
     * @param string $inADOR
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP\RemoveFilterOutADOR
     */
    public function setInADOR($inADOR)
    {
      $this->inADOR = $inADOR;
      return $this;
    }

}

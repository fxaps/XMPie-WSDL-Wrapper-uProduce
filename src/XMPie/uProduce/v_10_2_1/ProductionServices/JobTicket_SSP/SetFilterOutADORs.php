<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\JobTicket_SSP;

class SetFilterOutADORs
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
     * @var ArrayOfString $inADORs
     */
    protected $inADORs = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param ArrayOfString $inADORs
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inADORs = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inADORs = $inADORs;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\JobTicket_SSP\SetFilterOutADORs
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\JobTicket_SSP\SetFilterOutADORs
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\JobTicket_SSP\SetFilterOutADORs
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInADORs()
    {
      return $this->inADORs;
    }

    /**
     * @param ArrayOfString $inADORs
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\JobTicket_SSP\SetFilterOutADORs
     */
    public function setInADORs($inADORs)
    {
      $this->inADORs = $inADORs;
      return $this;
    }

}

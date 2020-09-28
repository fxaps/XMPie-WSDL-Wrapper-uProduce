<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP;

class SetJDFParameter
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
     * @var Parameter $inParam
     */
    protected $inParam = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param Parameter $inParam
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inParam = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inParam = $inParam;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP\SetJDFParameter
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP\SetJDFParameter
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP\SetJDFParameter
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return Parameter
     */
    public function getInParam()
    {
      return $this->inParam;
    }

    /**
     * @param Parameter $inParam
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP\SetJDFParameter
     */
    public function setInParam($inParam)
    {
      $this->inParam = $inParam;
      return $this;
    }

}

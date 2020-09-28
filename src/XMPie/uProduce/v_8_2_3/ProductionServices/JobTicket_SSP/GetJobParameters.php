<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP;

class GetJobParameters
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
     * @var ArrayOfString $inParameterNames
     */
    protected $inParameterNames = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param ArrayOfString $inParameterNames
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inParameterNames = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inParameterNames = $inParameterNames;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP\GetJobParameters
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP\GetJobParameters
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP\GetJobParameters
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInParameterNames()
    {
      return $this->inParameterNames;
    }

    /**
     * @param ArrayOfString $inParameterNames
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\JobTicket_SSP\GetJobParameters
     */
    public function setInParameterNames($inParameterNames)
    {
      $this->inParameterNames = $inParameterNames;
      return $this;
    }

}

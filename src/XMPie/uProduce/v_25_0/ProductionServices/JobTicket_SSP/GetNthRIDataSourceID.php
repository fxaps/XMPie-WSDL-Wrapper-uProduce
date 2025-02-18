<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP;

class GetNthRIDataSourceID
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
     * @var int $inRIIndex
     */
    protected $inRIIndex = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param int $inRIIndex
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inRIIndex = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inRIIndex = $inRIIndex;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP\GetNthRIDataSourceID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP\GetNthRIDataSourceID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP\GetNthRIDataSourceID
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return int
     */
    public function getInRIIndex()
    {
      return $this->inRIIndex;
    }

    /**
     * @param int $inRIIndex
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP\GetNthRIDataSourceID
     */
    public function setInRIIndex($inRIIndex)
    {
      $this->inRIIndex = $inRIIndex;
      return $this;
    }

}

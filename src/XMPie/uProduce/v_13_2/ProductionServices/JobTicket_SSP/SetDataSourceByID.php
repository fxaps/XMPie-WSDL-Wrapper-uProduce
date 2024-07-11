<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP;

class SetDataSourceByID
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
     * @var string $inSchemaName
     */
    protected $inSchemaName = null;

    /**
     * @var string $inDataSourceID
     */
    protected $inDataSourceID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inSchemaName
     * @param string $inDataSourceID
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inSchemaName = null, $inDataSourceID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inTicketID = $inTicketID;
      $this->inSchemaName = $inSchemaName;
      $this->inDataSourceID = $inDataSourceID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\SetDataSourceByID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\SetDataSourceByID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\SetDataSourceByID
     */
    public function setInTicketID($inTicketID)
    {
      $this->inTicketID = $inTicketID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSchemaName()
    {
      return $this->inSchemaName;
    }

    /**
     * @param string $inSchemaName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\SetDataSourceByID
     */
    public function setInSchemaName($inSchemaName)
    {
      $this->inSchemaName = $inSchemaName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDataSourceID()
    {
      return $this->inDataSourceID;
    }

    /**
     * @param string $inDataSourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\SetDataSourceByID
     */
    public function setInDataSourceID($inDataSourceID)
    {
      $this->inDataSourceID = $inDataSourceID;
      return $this;
    }

}

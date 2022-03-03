<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\Production_SSP;

class GetOnDemandOutput
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
     * @var string $inRequestID
     */
    protected $inRequestID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inRequestID
     */
    public function __construct($inUsername = null, $inPassword = null, $inRequestID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inRequestID = $inRequestID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\Production_SSP\GetOnDemandOutput
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\Production_SSP\GetOnDemandOutput
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRequestID()
    {
      return $this->inRequestID;
    }

    /**
     * @param string $inRequestID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\Production_SSP\GetOnDemandOutput
     */
    public function setInRequestID($inRequestID)
    {
      $this->inRequestID = $inRequestID;
      return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\PlanPartsProvider_SSP;

class GetAllProperties
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
     * @var string $inPPPID
     */
    protected $inPPPID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPPPID
     */
    public function __construct($inUsername = null, $inPassword = null, $inPPPID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPPPID = $inPPPID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\PlanPartsProvider_SSP\GetAllProperties
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\PlanPartsProvider_SSP\GetAllProperties
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPPPID()
    {
      return $this->inPPPID;
    }

    /**
     * @param string $inPPPID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\PlanPartsProvider_SSP\GetAllProperties
     */
    public function setInPPPID($inPPPID)
    {
      $this->inPPPID = $inPPPID;
      return $this;
    }

}

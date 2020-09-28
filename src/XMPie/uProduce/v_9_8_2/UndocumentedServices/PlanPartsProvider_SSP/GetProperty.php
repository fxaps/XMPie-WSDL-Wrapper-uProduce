<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PlanPartsProvider_SSP;

class GetProperty
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
     * @var string $inPropertyName
     */
    protected $inPropertyName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPPPID
     * @param string $inPropertyName
     */
    public function __construct($inUsername = null, $inPassword = null, $inPPPID = null, $inPropertyName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPPPID = $inPPPID;
      $this->inPropertyName = $inPropertyName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PlanPartsProvider_SSP\GetProperty
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PlanPartsProvider_SSP\GetProperty
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PlanPartsProvider_SSP\GetProperty
     */
    public function setInPPPID($inPPPID)
    {
      $this->inPPPID = $inPPPID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPropertyName()
    {
      return $this->inPropertyName;
    }

    /**
     * @param string $inPropertyName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PlanPartsProvider_SSP\GetProperty
     */
    public function setInPropertyName($inPropertyName)
    {
      $this->inPropertyName = $inPropertyName;
      return $this;
    }

}

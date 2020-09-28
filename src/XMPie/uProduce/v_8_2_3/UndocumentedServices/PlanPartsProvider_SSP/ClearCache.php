<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PlanPartsProvider_SSP;

class ClearCache
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
     * @var string $inDLLName
     */
    protected $inDLLName = null;

    /**
     * @var string $inFuncName
     */
    protected $inFuncName = null;

    /**
     * @var string $expirationDays
     */
    protected $expirationDays = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDLLName
     * @param string $inFuncName
     * @param string $expirationDays
     */
    public function __construct($inUsername = null, $inPassword = null, $inDLLName = null, $inFuncName = null, $expirationDays = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDLLName = $inDLLName;
      $this->inFuncName = $inFuncName;
      $this->expirationDays = $expirationDays;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PlanPartsProvider_SSP\ClearCache
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PlanPartsProvider_SSP\ClearCache
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDLLName()
    {
      return $this->inDLLName;
    }

    /**
     * @param string $inDLLName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PlanPartsProvider_SSP\ClearCache
     */
    public function setInDLLName($inDLLName)
    {
      $this->inDLLName = $inDLLName;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFuncName()
    {
      return $this->inFuncName;
    }

    /**
     * @param string $inFuncName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PlanPartsProvider_SSP\ClearCache
     */
    public function setInFuncName($inFuncName)
    {
      $this->inFuncName = $inFuncName;
      return $this;
    }

    /**
     * @return string
     */
    public function getExpirationDays()
    {
      return $this->expirationDays;
    }

    /**
     * @param string $expirationDays
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\PlanPartsProvider_SSP\ClearCache
     */
    public function setExpirationDays($expirationDays)
    {
      $this->expirationDays = $expirationDays;
      return $this;
    }

}

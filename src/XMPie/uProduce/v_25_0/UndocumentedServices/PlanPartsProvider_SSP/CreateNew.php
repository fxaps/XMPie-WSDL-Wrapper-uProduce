<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PlanPartsProvider_SSP;

class CreateNew
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
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDLLName
     * @param string $inFuncName
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inDLLName = null, $inFuncName = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDLLName = $inDLLName;
      $this->inFuncName = $inFuncName;
      $this->inProps = $inProps;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PlanPartsProvider_SSP\CreateNew
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PlanPartsProvider_SSP\CreateNew
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PlanPartsProvider_SSP\CreateNew
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PlanPartsProvider_SSP\CreateNew
     */
    public function setInFuncName($inFuncName)
    {
      $this->inFuncName = $inFuncName;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProps()
    {
      return $this->inProps;
    }

    /**
     * @param ArrayOfProperty $inProps
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PlanPartsProvider_SSP\CreateNew
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}

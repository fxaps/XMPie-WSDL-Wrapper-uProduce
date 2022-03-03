<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\SheetSize_SSP;

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
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var float $inWidth
     */
    protected $inWidth = null;

    /**
     * @var float $inHeight
     */
    protected $inHeight = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inName
     * @param float $inWidth
     * @param float $inHeight
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inName = null, $inWidth = null, $inHeight = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inName = $inName;
      $this->inWidth = $inWidth;
      $this->inHeight = $inHeight;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\SheetSize_SSP\CreateNew
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\SheetSize_SSP\CreateNew
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInName()
    {
      return $this->inName;
    }

    /**
     * @param string $inName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\SheetSize_SSP\CreateNew
     */
    public function setInName($inName)
    {
      $this->inName = $inName;
      return $this;
    }

    /**
     * @return float
     */
    public function getInWidth()
    {
      return $this->inWidth;
    }

    /**
     * @param float $inWidth
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\SheetSize_SSP\CreateNew
     */
    public function setInWidth($inWidth)
    {
      $this->inWidth = $inWidth;
      return $this;
    }

    /**
     * @return float
     */
    public function getInHeight()
    {
      return $this->inHeight;
    }

    /**
     * @param float $inHeight
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\SheetSize_SSP\CreateNew
     */
    public function setInHeight($inHeight)
    {
      $this->inHeight = $inHeight;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\SheetSize_SSP\CreateNew
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}

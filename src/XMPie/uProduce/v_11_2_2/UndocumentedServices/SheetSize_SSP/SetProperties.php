<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\SheetSize_SSP;

class SetProperties
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
     * @var string $inSheetSizeID
     */
    protected $inSheetSizeID = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inSheetSizeID
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inSheetSizeID = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inSheetSizeID = $inSheetSizeID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\SheetSize_SSP\SetProperties
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\SheetSize_SSP\SetProperties
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSheetSizeID()
    {
      return $this->inSheetSizeID;
    }

    /**
     * @param string $inSheetSizeID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\SheetSize_SSP\SetProperties
     */
    public function setInSheetSizeID($inSheetSizeID)
    {
      $this->inSheetSizeID = $inSheetSizeID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\SheetSize_SSP\SetProperties
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}

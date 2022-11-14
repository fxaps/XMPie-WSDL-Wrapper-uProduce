<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Document_SSP;

class GetDocumentStorageTypeXMPTblDataSet
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
     * @var string $inDocumentStorageType
     */
    protected $inDocumentStorageType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentStorageType
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentStorageType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDocumentStorageType = $inDocumentStorageType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Document_SSP\GetDocumentStorageTypeXMPTblDataSet
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Document_SSP\GetDocumentStorageTypeXMPTblDataSet
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentStorageType()
    {
      return $this->inDocumentStorageType;
    }

    /**
     * @param string $inDocumentStorageType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Document_SSP\GetDocumentStorageTypeXMPTblDataSet
     */
    public function setInDocumentStorageType($inDocumentStorageType)
    {
      $this->inDocumentStorageType = $inDocumentStorageType;
      return $this;
    }

}

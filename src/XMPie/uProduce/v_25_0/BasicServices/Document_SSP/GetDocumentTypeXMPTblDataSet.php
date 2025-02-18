<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP;

class GetDocumentTypeXMPTblDataSet
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
     * @var string $inDocumentType
     */
    protected $inDocumentType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentType
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentType = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDocumentType = $inDocumentType;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP\GetDocumentTypeXMPTblDataSet
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP\GetDocumentTypeXMPTblDataSet
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentType()
    {
      return $this->inDocumentType;
    }

    /**
     * @param string $inDocumentType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP\GetDocumentTypeXMPTblDataSet
     */
    public function setInDocumentType($inDocumentType)
    {
      $this->inDocumentType = $inDocumentType;
      return $this;
    }

}

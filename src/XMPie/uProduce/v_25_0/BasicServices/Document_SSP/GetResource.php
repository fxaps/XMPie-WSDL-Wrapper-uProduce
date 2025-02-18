<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP;

class GetResource
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
     * @var string $inDocumentID
     */
    protected $inDocumentID = null;

    /**
     * @var string $inResourceFileName
     */
    protected $inResourceFileName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentID
     * @param string $inResourceFileName
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inResourceFileName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDocumentID = $inDocumentID;
      $this->inResourceFileName = $inResourceFileName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP\GetResource
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP\GetResource
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentID()
    {
      return $this->inDocumentID;
    }

    /**
     * @param string $inDocumentID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP\GetResource
     */
    public function setInDocumentID($inDocumentID)
    {
      $this->inDocumentID = $inDocumentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInResourceFileName()
    {
      return $this->inResourceFileName;
    }

    /**
     * @param string $inResourceFileName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Document_SSP\GetResource
     */
    public function setInResourceFileName($inResourceFileName)
    {
      $this->inResourceFileName = $inResourceFileName;
      return $this;
    }

}

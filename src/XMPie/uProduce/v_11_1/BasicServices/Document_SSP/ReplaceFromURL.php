<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\BasicServices\Document_SSP;

class ReplaceFromURL
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
     * @var string $inURL
     */
    protected $inURL = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentID
     * @param string $inURL
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inURL = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDocumentID = $inDocumentID;
      $this->inURL = $inURL;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\BasicServices\Document_SSP\ReplaceFromURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\BasicServices\Document_SSP\ReplaceFromURL
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\BasicServices\Document_SSP\ReplaceFromURL
     */
    public function setInDocumentID($inDocumentID)
    {
      $this->inDocumentID = $inDocumentID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInURL()
    {
      return $this->inURL;
    }

    /**
     * @param string $inURL
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\BasicServices\Document_SSP\ReplaceFromURL
     */
    public function setInURL($inURL)
    {
      $this->inURL = $inURL;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\BasicServices\Document_SSP\ReplaceFromURL
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}

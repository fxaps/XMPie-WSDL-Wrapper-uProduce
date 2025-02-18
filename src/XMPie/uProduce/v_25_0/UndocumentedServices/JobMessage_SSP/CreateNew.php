<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\JobMessage_SSP;

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
     * @var string $inJobID
     */
    protected $inJobID = null;

    /**
     * @var string $inContextID
     */
    protected $inContextID = null;

    /**
     * @var string $inSeverityID
     */
    protected $inSeverityID = null;

    /**
     * @var string $inMessageID
     */
    protected $inMessageID = null;

    /**
     * @var string $inMessageParamsString
     */
    protected $inMessageParamsString = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobID
     * @param string $inContextID
     * @param string $inSeverityID
     * @param string $inMessageID
     * @param string $inMessageParamsString
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobID = null, $inContextID = null, $inSeverityID = null, $inMessageID = null, $inMessageParamsString = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inJobID = $inJobID;
      $this->inContextID = $inContextID;
      $this->inSeverityID = $inSeverityID;
      $this->inMessageID = $inMessageID;
      $this->inMessageParamsString = $inMessageParamsString;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\JobMessage_SSP\CreateNew
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\JobMessage_SSP\CreateNew
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInJobID()
    {
      return $this->inJobID;
    }

    /**
     * @param string $inJobID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\JobMessage_SSP\CreateNew
     */
    public function setInJobID($inJobID)
    {
      $this->inJobID = $inJobID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInContextID()
    {
      return $this->inContextID;
    }

    /**
     * @param string $inContextID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\JobMessage_SSP\CreateNew
     */
    public function setInContextID($inContextID)
    {
      $this->inContextID = $inContextID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSeverityID()
    {
      return $this->inSeverityID;
    }

    /**
     * @param string $inSeverityID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\JobMessage_SSP\CreateNew
     */
    public function setInSeverityID($inSeverityID)
    {
      $this->inSeverityID = $inSeverityID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMessageID()
    {
      return $this->inMessageID;
    }

    /**
     * @param string $inMessageID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\JobMessage_SSP\CreateNew
     */
    public function setInMessageID($inMessageID)
    {
      $this->inMessageID = $inMessageID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMessageParamsString()
    {
      return $this->inMessageParamsString;
    }

    /**
     * @param string $inMessageParamsString
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\JobMessage_SSP\CreateNew
     */
    public function setInMessageParamsString($inMessageParamsString)
    {
      $this->inMessageParamsString = $inMessageParamsString;
      return $this;
    }

}

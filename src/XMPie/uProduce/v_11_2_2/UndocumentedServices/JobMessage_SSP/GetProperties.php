<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\JobMessage_SSP;

class GetProperties
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
     * @var string $inMessageID
     */
    protected $inMessageID = null;

    /**
     * @var ArrayOfString $inPropertiesNames
     */
    protected $inPropertiesNames = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inMessageID
     * @param ArrayOfString $inPropertiesNames
     */
    public function __construct($inUsername = null, $inPassword = null, $inMessageID = null, $inPropertiesNames = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inMessageID = $inMessageID;
      $this->inPropertiesNames = $inPropertiesNames;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\JobMessage_SSP\GetProperties
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\JobMessage_SSP\GetProperties
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\JobMessage_SSP\GetProperties
     */
    public function setInMessageID($inMessageID)
    {
      $this->inMessageID = $inMessageID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInPropertiesNames()
    {
      return $this->inPropertiesNames;
    }

    /**
     * @param ArrayOfString $inPropertiesNames
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\JobMessage_SSP\GetProperties
     */
    public function setInPropertiesNames($inPropertiesNames)
    {
      $this->inPropertiesNames = $inPropertiesNames;
      return $this;
    }

}
<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\ConfigFile_SSP;

class GetCustomer
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
     * @var string $inConfigFileID
     */
    protected $inConfigFileID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inConfigFileID
     */
    public function __construct($inUsername = null, $inPassword = null, $inConfigFileID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inConfigFileID = $inConfigFileID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\ConfigFile_SSP\GetCustomer
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\ConfigFile_SSP\GetCustomer
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInConfigFileID()
    {
      return $this->inConfigFileID;
    }

    /**
     * @param string $inConfigFileID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\ConfigFile_SSP\GetCustomer
     */
    public function setInConfigFileID($inConfigFileID)
    {
      $this->inConfigFileID = $inConfigFileID;
      return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\ConfigFile_SSP;

class GetID
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
     * @var string $inConfigFileName
     */
    protected $inConfigFileName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inConfigFileName
     */
    public function __construct($inUsername = null, $inPassword = null, $inConfigFileName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inConfigFileName = $inConfigFileName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\ConfigFile_SSP\GetID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\ConfigFile_SSP\GetID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInConfigFileName()
    {
      return $this->inConfigFileName;
    }

    /**
     * @param string $inConfigFileName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\ConfigFile_SSP\GetID
     */
    public function setInConfigFileName($inConfigFileName)
    {
      $this->inConfigFileName = $inConfigFileName;
      return $this;
    }

}

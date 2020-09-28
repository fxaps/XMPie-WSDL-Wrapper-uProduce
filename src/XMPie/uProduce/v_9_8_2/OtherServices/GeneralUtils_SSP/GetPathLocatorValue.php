<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\GeneralUtils_SSP;

class GetPathLocatorValue
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inName
     */
    public function __construct($inUsername = null, $inPassword = null, $inName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inName = $inName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\GeneralUtils_SSP\GetPathLocatorValue
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\GeneralUtils_SSP\GetPathLocatorValue
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\GeneralUtils_SSP\GetPathLocatorValue
     */
    public function setInName($inName)
    {
      $this->inName = $inName;
      return $this;
    }

}

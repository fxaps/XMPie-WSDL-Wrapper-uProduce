<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\SystemManager_SSP;

class GetCloudGatewayConfiguration
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
     * @param string $inUsername
     * @param string $inPassword
     */
    public function __construct($inUsername = null, $inPassword = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\SystemManager_SSP\GetCloudGatewayConfiguration
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\UndocumentedServices\SystemManager_SSP\GetCloudGatewayConfiguration
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

}
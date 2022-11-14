<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\SystemManager_SSP;

class SetCloudGatewayConfigurationResponse
{

    /**
     * @var boolean $SetCloudGatewayConfigurationResult
     */
    protected $SetCloudGatewayConfigurationResult = null;

    /**
     * @param boolean $SetCloudGatewayConfigurationResult
     */
    public function __construct($SetCloudGatewayConfigurationResult = null)
    {
      $this->SetCloudGatewayConfigurationResult = $SetCloudGatewayConfigurationResult;
    }

    /**
     * @return boolean
     */
    public function getSetCloudGatewayConfigurationResult()
    {
      return $this->SetCloudGatewayConfigurationResult;
    }

    /**
     * @param boolean $SetCloudGatewayConfigurationResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\SystemManager_SSP\SetCloudGatewayConfigurationResponse
     */
    public function setSetCloudGatewayConfigurationResult($SetCloudGatewayConfigurationResult)
    {
      $this->SetCloudGatewayConfigurationResult = $SetCloudGatewayConfigurationResult;
      return $this;
    }

}

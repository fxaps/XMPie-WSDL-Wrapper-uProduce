<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\SystemManager_SSP;

class GetCloudGatewayConfigurationResponse
{

    /**
     * @var CloudGatewayConfiguration $GetCloudGatewayConfigurationResult
     */
    protected $GetCloudGatewayConfigurationResult = null;

    /**
     * @param CloudGatewayConfiguration $GetCloudGatewayConfigurationResult
     */
    public function __construct($GetCloudGatewayConfigurationResult = null)
    {
      $this->GetCloudGatewayConfigurationResult = $GetCloudGatewayConfigurationResult;
    }

    /**
     * @return CloudGatewayConfiguration
     */
    public function getGetCloudGatewayConfigurationResult()
    {
      return $this->GetCloudGatewayConfigurationResult;
    }

    /**
     * @param CloudGatewayConfiguration $GetCloudGatewayConfigurationResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\SystemManager_SSP\GetCloudGatewayConfigurationResponse
     */
    public function setGetCloudGatewayConfigurationResult($GetCloudGatewayConfigurationResult)
    {
      $this->GetCloudGatewayConfigurationResult = $GetCloudGatewayConfigurationResult;
      return $this;
    }

}

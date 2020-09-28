<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\SystemManager_SSP;

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
     * @return GetCloudGatewayConfigurationResponse
     */
    public function setGetCloudGatewayConfigurationResult($GetCloudGatewayConfigurationResult)
    {
        $this->GetCloudGatewayConfigurationResult = $GetCloudGatewayConfigurationResult;
        return $this;
    }

}

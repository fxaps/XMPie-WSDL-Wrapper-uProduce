<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Tracker_SSP;

class GetCloudTrackingConfigurationResponse
{

    /**
     * @var string $GetCloudTrackingConfigurationResult
     */
    protected $GetCloudTrackingConfigurationResult = null;

    /**
     * @param string $GetCloudTrackingConfigurationResult
     */
    public function __construct($GetCloudTrackingConfigurationResult = null)
    {
        $this->GetCloudTrackingConfigurationResult = $GetCloudTrackingConfigurationResult;
    }

    /**
     * @return string
     */
    public function getGetCloudTrackingConfigurationResult()
    {
        return $this->GetCloudTrackingConfigurationResult;
    }

    /**
     * @param string $GetCloudTrackingConfigurationResult
     * @return GetCloudTrackingConfigurationResponse
     */
    public function setGetCloudTrackingConfigurationResult($GetCloudTrackingConfigurationResult)
    {
        $this->GetCloudTrackingConfigurationResult = $GetCloudTrackingConfigurationResult;
        return $this;
    }

}

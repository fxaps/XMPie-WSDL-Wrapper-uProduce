<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetTrackingParametersResponse
{

    /**
     * @var ArrayOfParameter $GetTrackingParametersResult
     */
    protected $GetTrackingParametersResult = null;

    /**
     * @param ArrayOfParameter $GetTrackingParametersResult
     */
    public function __construct($GetTrackingParametersResult = null)
    {
        $this->GetTrackingParametersResult = $GetTrackingParametersResult;
    }

    /**
     * @return ArrayOfParameter
     */
    public function getGetTrackingParametersResult()
    {
        return $this->GetTrackingParametersResult;
    }

    /**
     * @param ArrayOfParameter $GetTrackingParametersResult
     * @return GetTrackingParametersResponse
     */
    public function setGetTrackingParametersResult($GetTrackingParametersResult)
    {
        $this->GetTrackingParametersResult = $GetTrackingParametersResult;
        return $this;
    }

}

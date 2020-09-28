<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetADORsResponse
{

    /**
     * @var ArrayOfPlanObject $GetADORsResult
     */
    protected $GetADORsResult = null;

    /**
     * @param ArrayOfPlanObject $GetADORsResult
     */
    public function __construct($GetADORsResult = null)
    {
        $this->GetADORsResult = $GetADORsResult;
    }

    /**
     * @return ArrayOfPlanObject
     */
    public function getGetADORsResult()
    {
        return $this->GetADORsResult;
    }

    /**
     * @param ArrayOfPlanObject $GetADORsResult
     * @return GetADORsResponse
     */
    public function setGetADORsResult($GetADORsResult)
    {
        $this->GetADORsResult = $GetADORsResult;
        return $this;
    }

}

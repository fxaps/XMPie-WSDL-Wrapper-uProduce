<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\InteractiveCampaign_SSP;

class GetADORsDataSetResponse
{

    /**
     * @var GetADORsDataSetResult $GetADORsDataSetResult
     */
    protected $GetADORsDataSetResult = null;

    /**
     * @param GetADORsDataSetResult $GetADORsDataSetResult
     */
    public function __construct($GetADORsDataSetResult = null)
    {
        $this->GetADORsDataSetResult = $GetADORsDataSetResult;
    }

    /**
     * @return GetADORsDataSetResult
     */
    public function getGetADORsDataSetResult()
    {
        return $this->GetADORsDataSetResult;
    }

    /**
     * @param GetADORsDataSetResult $GetADORsDataSetResult
     * @return GetADORsDataSetResponse
     */
    public function setGetADORsDataSetResult($GetADORsDataSetResult)
    {
        $this->GetADORsDataSetResult = $GetADORsDataSetResult;
        return $this;
    }

}

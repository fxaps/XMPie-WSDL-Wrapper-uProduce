<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\InteractiveCampaign_SSP;

class GetTabularADORColumnsResponse
{

    /**
     * @var ArrayOfPlanTabularColumn $GetTabularADORColumnsResult
     */
    protected $GetTabularADORColumnsResult = null;

    /**
     * @param ArrayOfPlanTabularColumn $GetTabularADORColumnsResult
     */
    public function __construct($GetTabularADORColumnsResult = null)
    {
        $this->GetTabularADORColumnsResult = $GetTabularADORColumnsResult;
    }

    /**
     * @return ArrayOfPlanTabularColumn
     */
    public function getGetTabularADORColumnsResult()
    {
        return $this->GetTabularADORColumnsResult;
    }

    /**
     * @param ArrayOfPlanTabularColumn $GetTabularADORColumnsResult
     * @return GetTabularADORColumnsResponse
     */
    public function setGetTabularADORColumnsResult($GetTabularADORColumnsResult)
    {
        $this->GetTabularADORColumnsResult = $GetTabularADORColumnsResult;
        return $this;
    }

}

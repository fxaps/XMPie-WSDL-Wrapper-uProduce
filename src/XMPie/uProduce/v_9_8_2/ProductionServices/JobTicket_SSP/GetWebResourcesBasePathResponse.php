<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetWebResourcesBasePathResponse
{

    /**
     * @var string $GetWebResourcesBasePathResult
     */
    protected $GetWebResourcesBasePathResult = null;

    /**
     * @param string $GetWebResourcesBasePathResult
     */
    public function __construct($GetWebResourcesBasePathResult = null)
    {
        $this->GetWebResourcesBasePathResult = $GetWebResourcesBasePathResult;
    }

    /**
     * @return string
     */
    public function getGetWebResourcesBasePathResult()
    {
        return $this->GetWebResourcesBasePathResult;
    }

    /**
     * @param string $GetWebResourcesBasePathResult
     * @return GetWebResourcesBasePathResponse
     */
    public function setGetWebResourcesBasePathResult($GetWebResourcesBasePathResult)
    {
        $this->GetWebResourcesBasePathResult = $GetWebResourcesBasePathResult;
        return $this;
    }

}

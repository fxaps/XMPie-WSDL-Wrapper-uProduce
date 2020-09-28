<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\GeneralUtils_SSP;

class GetPathLocatorDataSetResponse
{

    /**
     * @var GetPathLocatorDataSetResult $GetPathLocatorDataSetResult
     */
    protected $GetPathLocatorDataSetResult = null;

    /**
     * @param GetPathLocatorDataSetResult $GetPathLocatorDataSetResult
     */
    public function __construct($GetPathLocatorDataSetResult = null)
    {
        $this->GetPathLocatorDataSetResult = $GetPathLocatorDataSetResult;
    }

    /**
     * @return GetPathLocatorDataSetResult
     */
    public function getGetPathLocatorDataSetResult()
    {
        return $this->GetPathLocatorDataSetResult;
    }

    /**
     * @param GetPathLocatorDataSetResult $GetPathLocatorDataSetResult
     * @return GetPathLocatorDataSetResponse
     */
    public function setGetPathLocatorDataSetResult($GetPathLocatorDataSetResult)
    {
        $this->GetPathLocatorDataSetResult = $GetPathLocatorDataSetResult;
        return $this;
    }

}

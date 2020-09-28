<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\PlanUtils_SSP;

class GetObjectsResponse
{

    /**
     * @var ArrayOfPlanObject $GetObjectsResult
     */
    protected $GetObjectsResult = null;

    /**
     * @param ArrayOfPlanObject $GetObjectsResult
     */
    public function __construct($GetObjectsResult = null)
    {
        $this->GetObjectsResult = $GetObjectsResult;
    }

    /**
     * @return ArrayOfPlanObject
     */
    public function getGetObjectsResult()
    {
        return $this->GetObjectsResult;
    }

    /**
     * @param ArrayOfPlanObject $GetObjectsResult
     * @return GetObjectsResponse
     */
    public function setGetObjectsResult($GetObjectsResult)
    {
        $this->GetObjectsResult = $GetObjectsResult;
        return $this;
    }

}

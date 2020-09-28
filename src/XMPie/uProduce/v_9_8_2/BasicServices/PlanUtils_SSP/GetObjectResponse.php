<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\PlanUtils_SSP;

class GetObjectResponse
{

    /**
     * @var PlanObject $GetObjectResult
     */
    protected $GetObjectResult = null;

    /**
     * @param PlanObject $GetObjectResult
     */
    public function __construct($GetObjectResult = null)
    {
        $this->GetObjectResult = $GetObjectResult;
    }

    /**
     * @return PlanObject
     */
    public function getGetObjectResult()
    {
        return $this->GetObjectResult;
    }

    /**
     * @param PlanObject $GetObjectResult
     * @return GetObjectResponse
     */
    public function setGetObjectResult($GetObjectResult)
    {
        $this->GetObjectResult = $GetObjectResult;
        return $this;
    }

}

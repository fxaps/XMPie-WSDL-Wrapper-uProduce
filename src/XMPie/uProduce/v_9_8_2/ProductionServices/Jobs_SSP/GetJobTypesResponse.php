<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Jobs_SSP;

class GetJobTypesResponse
{

    /**
     * @var GetJobTypesResult $GetJobTypesResult
     */
    protected $GetJobTypesResult = null;

    /**
     * @param GetJobTypesResult $GetJobTypesResult
     */
    public function __construct($GetJobTypesResult = null)
    {
        $this->GetJobTypesResult = $GetJobTypesResult;
    }

    /**
     * @return GetJobTypesResult
     */
    public function getGetJobTypesResult()
    {
        return $this->GetJobTypesResult;
    }

    /**
     * @param GetJobTypesResult $GetJobTypesResult
     * @return GetJobTypesResponse
     */
    public function setGetJobTypesResult($GetJobTypesResult)
    {
        $this->GetJobTypesResult = $GetJobTypesResult;
        return $this;
    }

}

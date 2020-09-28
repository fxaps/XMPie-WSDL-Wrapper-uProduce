<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\CustomButton_SSP;

class GetTypesResponse
{

    /**
     * @var GetTypesResult $GetTypesResult
     */
    protected $GetTypesResult = null;

    /**
     * @param GetTypesResult $GetTypesResult
     */
    public function __construct($GetTypesResult = null)
    {
        $this->GetTypesResult = $GetTypesResult;
    }

    /**
     * @return GetTypesResult
     */
    public function getGetTypesResult()
    {
        return $this->GetTypesResult;
    }

    /**
     * @param GetTypesResult $GetTypesResult
     * @return GetTypesResponse
     */
    public function setGetTypesResult($GetTypesResult)
    {
        $this->GetTypesResult = $GetTypesResult;
        return $this;
    }

}

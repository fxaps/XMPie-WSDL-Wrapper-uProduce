<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP;

class GetSupportedOperationsResponse
{

    /**
     * @var SupportedOperationsInfo $GetSupportedOperationsResult
     */
    protected $GetSupportedOperationsResult = null;

    /**
     * @param SupportedOperationsInfo $GetSupportedOperationsResult
     */
    public function __construct($GetSupportedOperationsResult = null)
    {
        $this->GetSupportedOperationsResult = $GetSupportedOperationsResult;
    }

    /**
     * @return SupportedOperationsInfo
     */
    public function getGetSupportedOperationsResult()
    {
        return $this->GetSupportedOperationsResult;
    }

    /**
     * @param SupportedOperationsInfo $GetSupportedOperationsResult
     * @return GetSupportedOperationsResponse
     */
    public function setGetSupportedOperationsResult($GetSupportedOperationsResult)
    {
        $this->GetSupportedOperationsResult = $GetSupportedOperationsResult;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP;

class GetADORValuesForRangeDataSetResponse
{

    /**
     * @var GetADORValuesForRangeDataSetResult $GetADORValuesForRangeDataSetResult
     */
    protected $GetADORValuesForRangeDataSetResult = null;

    /**
     * @param GetADORValuesForRangeDataSetResult $GetADORValuesForRangeDataSetResult
     */
    public function __construct($GetADORValuesForRangeDataSetResult = null)
    {
        $this->GetADORValuesForRangeDataSetResult = $GetADORValuesForRangeDataSetResult;
    }

    /**
     * @return GetADORValuesForRangeDataSetResult
     */
    public function getGetADORValuesForRangeDataSetResult()
    {
        return $this->GetADORValuesForRangeDataSetResult;
    }

    /**
     * @param GetADORValuesForRangeDataSetResult $GetADORValuesForRangeDataSetResult
     * @return GetADORValuesForRangeDataSetResponse
     */
    public function setGetADORValuesForRangeDataSetResult($GetADORValuesForRangeDataSetResult)
    {
        $this->GetADORValuesForRangeDataSetResult = $GetADORValuesForRangeDataSetResult;
        return $this;
    }

}

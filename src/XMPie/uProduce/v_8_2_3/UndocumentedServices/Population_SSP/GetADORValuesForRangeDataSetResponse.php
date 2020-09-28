<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\GetADORValuesForRangeDataSetResponse
     */
    public function setGetADORValuesForRangeDataSetResult($GetADORValuesForRangeDataSetResult)
    {
      $this->GetADORValuesForRangeDataSetResult = $GetADORValuesForRangeDataSetResult;
      return $this;
    }

}

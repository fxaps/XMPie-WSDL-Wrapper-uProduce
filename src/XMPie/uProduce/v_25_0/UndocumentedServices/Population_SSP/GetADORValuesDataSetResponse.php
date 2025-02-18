<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP;

class GetADORValuesDataSetResponse
{

    /**
     * @var GetADORValuesDataSetResult $GetADORValuesDataSetResult
     */
    protected $GetADORValuesDataSetResult = null;

    /**
     * @param GetADORValuesDataSetResult $GetADORValuesDataSetResult
     */
    public function __construct($GetADORValuesDataSetResult = null)
    {
      $this->GetADORValuesDataSetResult = $GetADORValuesDataSetResult;
    }

    /**
     * @return GetADORValuesDataSetResult
     */
    public function getGetADORValuesDataSetResult()
    {
      return $this->GetADORValuesDataSetResult;
    }

    /**
     * @param GetADORValuesDataSetResult $GetADORValuesDataSetResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\GetADORValuesDataSetResponse
     */
    public function setGetADORValuesDataSetResult($GetADORValuesDataSetResult)
    {
      $this->GetADORValuesDataSetResult = $GetADORValuesDataSetResult;
      return $this;
    }

}

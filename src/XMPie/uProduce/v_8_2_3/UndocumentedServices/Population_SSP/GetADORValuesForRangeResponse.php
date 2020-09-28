<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP;

class GetADORValuesForRangeResponse
{

    /**
     * @var XMPTblDataSet $GetADORValuesForRangeResult
     */
    protected $GetADORValuesForRangeResult = null;

    /**
     * @param XMPTblDataSet $GetADORValuesForRangeResult
     */
    public function __construct($GetADORValuesForRangeResult = null)
    {
      $this->GetADORValuesForRangeResult = $GetADORValuesForRangeResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetADORValuesForRangeResult()
    {
      return $this->GetADORValuesForRangeResult;
    }

    /**
     * @param XMPTblDataSet $GetADORValuesForRangeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\GetADORValuesForRangeResponse
     */
    public function setGetADORValuesForRangeResult($GetADORValuesForRangeResult)
    {
      $this->GetADORValuesForRangeResult = $GetADORValuesForRangeResult;
      return $this;
    }

}

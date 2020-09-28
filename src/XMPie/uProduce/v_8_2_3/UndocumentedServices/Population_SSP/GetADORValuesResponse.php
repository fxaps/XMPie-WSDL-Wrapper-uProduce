<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP;

class GetADORValuesResponse
{

    /**
     * @var XMPTblDataSet $GetADORValuesResult
     */
    protected $GetADORValuesResult = null;

    /**
     * @param XMPTblDataSet $GetADORValuesResult
     */
    public function __construct($GetADORValuesResult = null)
    {
      $this->GetADORValuesResult = $GetADORValuesResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetADORValuesResult()
    {
      return $this->GetADORValuesResult;
    }

    /**
     * @param XMPTblDataSet $GetADORValuesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\GetADORValuesResponse
     */
    public function setGetADORValuesResult($GetADORValuesResult)
    {
      $this->GetADORValuesResult = $GetADORValuesResult;
      return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\Population_SSP;

class UpdateADORValuesResponse
{

    /**
     * @var string $UpdateADORValuesResult
     */
    protected $UpdateADORValuesResult = null;

    /**
     * @param string $UpdateADORValuesResult
     */
    public function __construct($UpdateADORValuesResult = null)
    {
      $this->UpdateADORValuesResult = $UpdateADORValuesResult;
    }

    /**
     * @return string
     */
    public function getUpdateADORValuesResult()
    {
      return $this->UpdateADORValuesResult;
    }

    /**
     * @param string $UpdateADORValuesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\Population_SSP\UpdateADORValuesResponse
     */
    public function setUpdateADORValuesResult($UpdateADORValuesResult)
    {
      $this->UpdateADORValuesResult = $UpdateADORValuesResult;
      return $this;
    }

}

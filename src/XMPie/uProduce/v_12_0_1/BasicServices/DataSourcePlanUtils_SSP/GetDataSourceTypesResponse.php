<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSourcePlanUtils_SSP;

class GetDataSourceTypesResponse
{

    /**
     * @var GetDataSourceTypesResult $GetDataSourceTypesResult
     */
    protected $GetDataSourceTypesResult = null;

    /**
     * @param GetDataSourceTypesResult $GetDataSourceTypesResult
     */
    public function __construct($GetDataSourceTypesResult = null)
    {
      $this->GetDataSourceTypesResult = $GetDataSourceTypesResult;
    }

    /**
     * @return GetDataSourceTypesResult
     */
    public function getGetDataSourceTypesResult()
    {
      return $this->GetDataSourceTypesResult;
    }

    /**
     * @param GetDataSourceTypesResult $GetDataSourceTypesResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSourcePlanUtils_SSP\GetDataSourceTypesResponse
     */
    public function setGetDataSourceTypesResult($GetDataSourceTypesResult)
    {
      $this->GetDataSourceTypesResult = $GetDataSourceTypesResult;
      return $this;
    }

}

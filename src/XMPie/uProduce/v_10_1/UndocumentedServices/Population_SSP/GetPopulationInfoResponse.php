<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\Population_SSP;

class GetPopulationInfoResponse
{

    /**
     * @var PopulationInfo $GetPopulationInfoResult
     */
    protected $GetPopulationInfoResult = null;

    /**
     * @param PopulationInfo $GetPopulationInfoResult
     */
    public function __construct($GetPopulationInfoResult = null)
    {
      $this->GetPopulationInfoResult = $GetPopulationInfoResult;
    }

    /**
     * @return PopulationInfo
     */
    public function getGetPopulationInfoResult()
    {
      return $this->GetPopulationInfoResult;
    }

    /**
     * @param PopulationInfo $GetPopulationInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\Population_SSP\GetPopulationInfoResponse
     */
    public function setGetPopulationInfoResult($GetPopulationInfoResult)
    {
      $this->GetPopulationInfoResult = $GetPopulationInfoResult;
      return $this;
    }

}

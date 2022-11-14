<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Customer_SSP;

class GetPlanPartsProviderIDResponse
{

    /**
     * @var string $GetPlanPartsProviderIDResult
     */
    protected $GetPlanPartsProviderIDResult = null;

    /**
     * @param string $GetPlanPartsProviderIDResult
     */
    public function __construct($GetPlanPartsProviderIDResult = null)
    {
      $this->GetPlanPartsProviderIDResult = $GetPlanPartsProviderIDResult;
    }

    /**
     * @return string
     */
    public function getGetPlanPartsProviderIDResult()
    {
      return $this->GetPlanPartsProviderIDResult;
    }

    /**
     * @param string $GetPlanPartsProviderIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\BasicServices\Customer_SSP\GetPlanPartsProviderIDResponse
     */
    public function setGetPlanPartsProviderIDResult($GetPlanPartsProviderIDResult)
    {
      $this->GetPlanPartsProviderIDResult = $GetPlanPartsProviderIDResult;
      return $this;
    }

}

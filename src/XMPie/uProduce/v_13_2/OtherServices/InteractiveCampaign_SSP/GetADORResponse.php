<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\OtherServices\InteractiveCampaign_SSP;

class GetADORResponse
{

    /**
     * @var PlanObject $GetADORResult
     */
    protected $GetADORResult = null;

    /**
     * @param PlanObject $GetADORResult
     */
    public function __construct($GetADORResult = null)
    {
      $this->GetADORResult = $GetADORResult;
    }

    /**
     * @return PlanObject
     */
    public function getGetADORResult()
    {
      return $this->GetADORResult;
    }

    /**
     * @param PlanObject $GetADORResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\OtherServices\InteractiveCampaign_SSP\GetADORResponse
     */
    public function setGetADORResult($GetADORResult)
    {
      $this->GetADORResult = $GetADORResult;
      return $this;
    }

}

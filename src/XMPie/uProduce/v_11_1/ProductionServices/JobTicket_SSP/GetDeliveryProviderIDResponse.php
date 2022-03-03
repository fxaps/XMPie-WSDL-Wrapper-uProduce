<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\ProductionServices\JobTicket_SSP;

class GetDeliveryProviderIDResponse
{

    /**
     * @var string $GetDeliveryProviderIDResult
     */
    protected $GetDeliveryProviderIDResult = null;

    /**
     * @param string $GetDeliveryProviderIDResult
     */
    public function __construct($GetDeliveryProviderIDResult = null)
    {
      $this->GetDeliveryProviderIDResult = $GetDeliveryProviderIDResult;
    }

    /**
     * @return string
     */
    public function getGetDeliveryProviderIDResult()
    {
      return $this->GetDeliveryProviderIDResult;
    }

    /**
     * @param string $GetDeliveryProviderIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\ProductionServices\JobTicket_SSP\GetDeliveryProviderIDResponse
     */
    public function setGetDeliveryProviderIDResult($GetDeliveryProviderIDResult)
    {
      $this->GetDeliveryProviderIDResult = $GetDeliveryProviderIDResult;
      return $this;
    }

}

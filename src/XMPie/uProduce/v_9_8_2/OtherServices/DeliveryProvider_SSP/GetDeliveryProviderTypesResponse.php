<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\DeliveryProvider_SSP;

class GetDeliveryProviderTypesResponse
{

    /**
     * @var GetDeliveryProviderTypesResult $GetDeliveryProviderTypesResult
     */
    protected $GetDeliveryProviderTypesResult = null;

    /**
     * @param GetDeliveryProviderTypesResult $GetDeliveryProviderTypesResult
     */
    public function __construct($GetDeliveryProviderTypesResult = null)
    {
        $this->GetDeliveryProviderTypesResult = $GetDeliveryProviderTypesResult;
    }

    /**
     * @return GetDeliveryProviderTypesResult
     */
    public function getGetDeliveryProviderTypesResult()
    {
        return $this->GetDeliveryProviderTypesResult;
    }

    /**
     * @param GetDeliveryProviderTypesResult $GetDeliveryProviderTypesResult
     * @return GetDeliveryProviderTypesResponse
     */
    public function setGetDeliveryProviderTypesResult($GetDeliveryProviderTypesResult)
    {
        $this->GetDeliveryProviderTypesResult = $GetDeliveryProviderTypesResult;
        return $this;
    }

}

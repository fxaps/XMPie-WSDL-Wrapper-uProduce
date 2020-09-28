<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetDeliveryProviderResponse
{

    /**
     * @var EmailProviderInfo $GetDeliveryProviderResult
     */
    protected $GetDeliveryProviderResult = null;

    /**
     * @param EmailProviderInfo $GetDeliveryProviderResult
     */
    public function __construct($GetDeliveryProviderResult = null)
    {
        $this->GetDeliveryProviderResult = $GetDeliveryProviderResult;
    }

    /**
     * @return EmailProviderInfo
     */
    public function getGetDeliveryProviderResult()
    {
        return $this->GetDeliveryProviderResult;
    }

    /**
     * @param EmailProviderInfo $GetDeliveryProviderResult
     * @return GetDeliveryProviderResponse
     */
    public function setGetDeliveryProviderResult($GetDeliveryProviderResult)
    {
        $this->GetDeliveryProviderResult = $GetDeliveryProviderResult;
        return $this;
    }

}

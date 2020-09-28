<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\DeliveryProvider_SSP;

class GetDeliveryProviderInfoResponse
{

    /**
     * @var EmailProviderInfo $GetDeliveryProviderInfoResult
     */
    protected $GetDeliveryProviderInfoResult = null;

    /**
     * @param EmailProviderInfo $GetDeliveryProviderInfoResult
     */
    public function __construct($GetDeliveryProviderInfoResult = null)
    {
        $this->GetDeliveryProviderInfoResult = $GetDeliveryProviderInfoResult;
    }

    /**
     * @return EmailProviderInfo
     */
    public function getGetDeliveryProviderInfoResult()
    {
        return $this->GetDeliveryProviderInfoResult;
    }

    /**
     * @param EmailProviderInfo $GetDeliveryProviderInfoResult
     * @return GetDeliveryProviderInfoResponse
     */
    public function setGetDeliveryProviderInfoResult($GetDeliveryProviderInfoResult)
    {
        $this->GetDeliveryProviderInfoResult = $GetDeliveryProviderInfoResult;
        return $this;
    }

}

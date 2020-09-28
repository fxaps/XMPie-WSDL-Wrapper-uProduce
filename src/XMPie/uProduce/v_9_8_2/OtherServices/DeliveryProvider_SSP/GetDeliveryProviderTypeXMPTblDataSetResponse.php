<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\DeliveryProvider_SSP;

class GetDeliveryProviderTypeXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDeliveryProviderTypeXMPTblDataSetResult
     */
    protected $GetDeliveryProviderTypeXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDeliveryProviderTypeXMPTblDataSetResult
     */
    public function __construct($GetDeliveryProviderTypeXMPTblDataSetResult = null)
    {
        $this->GetDeliveryProviderTypeXMPTblDataSetResult = $GetDeliveryProviderTypeXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDeliveryProviderTypeXMPTblDataSetResult()
    {
        return $this->GetDeliveryProviderTypeXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDeliveryProviderTypeXMPTblDataSetResult
     * @return GetDeliveryProviderTypeXMPTblDataSetResponse
     */
    public function setGetDeliveryProviderTypeXMPTblDataSetResult($GetDeliveryProviderTypeXMPTblDataSetResult)
    {
        $this->GetDeliveryProviderTypeXMPTblDataSetResult = $GetDeliveryProviderTypeXMPTblDataSetResult;
        return $this;
    }

}

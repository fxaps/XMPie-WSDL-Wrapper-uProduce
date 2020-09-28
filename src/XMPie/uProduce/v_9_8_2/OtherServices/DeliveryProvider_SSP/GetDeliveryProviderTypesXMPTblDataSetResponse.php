<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\DeliveryProvider_SSP;

class GetDeliveryProviderTypesXMPTblDataSetResponse
{

    /**
     * @var XMPTblDataSet $GetDeliveryProviderTypesXMPTblDataSetResult
     */
    protected $GetDeliveryProviderTypesXMPTblDataSetResult = null;

    /**
     * @param XMPTblDataSet $GetDeliveryProviderTypesXMPTblDataSetResult
     */
    public function __construct($GetDeliveryProviderTypesXMPTblDataSetResult = null)
    {
        $this->GetDeliveryProviderTypesXMPTblDataSetResult = $GetDeliveryProviderTypesXMPTblDataSetResult;
    }

    /**
     * @return XMPTblDataSet
     */
    public function getGetDeliveryProviderTypesXMPTblDataSetResult()
    {
        return $this->GetDeliveryProviderTypesXMPTblDataSetResult;
    }

    /**
     * @param XMPTblDataSet $GetDeliveryProviderTypesXMPTblDataSetResult
     * @return GetDeliveryProviderTypesXMPTblDataSetResponse
     */
    public function setGetDeliveryProviderTypesXMPTblDataSetResult($GetDeliveryProviderTypesXMPTblDataSetResult)
    {
        $this->GetDeliveryProviderTypesXMPTblDataSetResult = $GetDeliveryProviderTypesXMPTblDataSetResult;
        return $this;
    }

}

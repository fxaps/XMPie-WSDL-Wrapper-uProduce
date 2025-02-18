<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\DeliveryProvider_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderTypesXMPTblDataSetResponse
     */
    public function setGetDeliveryProviderTypesXMPTblDataSetResult($GetDeliveryProviderTypesXMPTblDataSetResult)
    {
      $this->GetDeliveryProviderTypesXMPTblDataSetResult = $GetDeliveryProviderTypesXMPTblDataSetResult;
      return $this;
    }

}

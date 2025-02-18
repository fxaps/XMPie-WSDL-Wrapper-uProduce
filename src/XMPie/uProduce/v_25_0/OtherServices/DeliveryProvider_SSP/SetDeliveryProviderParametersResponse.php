<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\DeliveryProvider_SSP;

class SetDeliveryProviderParametersResponse
{

    /**
     * @var boolean $SetDeliveryProviderParametersResult
     */
    protected $SetDeliveryProviderParametersResult = null;

    /**
     * @param boolean $SetDeliveryProviderParametersResult
     */
    public function __construct($SetDeliveryProviderParametersResult = null)
    {
      $this->SetDeliveryProviderParametersResult = $SetDeliveryProviderParametersResult;
    }

    /**
     * @return boolean
     */
    public function getSetDeliveryProviderParametersResult()
    {
      return $this->SetDeliveryProviderParametersResult;
    }

    /**
     * @param boolean $SetDeliveryProviderParametersResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\DeliveryProvider_SSP\SetDeliveryProviderParametersResponse
     */
    public function setSetDeliveryProviderParametersResult($SetDeliveryProviderParametersResult)
    {
      $this->SetDeliveryProviderParametersResult = $SetDeliveryProviderParametersResult;
      return $this;
    }

}

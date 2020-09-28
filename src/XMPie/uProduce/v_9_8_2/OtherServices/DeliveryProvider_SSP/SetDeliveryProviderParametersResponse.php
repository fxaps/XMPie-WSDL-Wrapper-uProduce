<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\DeliveryProvider_SSP;

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
     * @return SetDeliveryProviderParametersResponse
     */
    public function setSetDeliveryProviderParametersResult($SetDeliveryProviderParametersResult)
    {
        $this->SetDeliveryProviderParametersResult = $SetDeliveryProviderParametersResult;
        return $this;
    }

}

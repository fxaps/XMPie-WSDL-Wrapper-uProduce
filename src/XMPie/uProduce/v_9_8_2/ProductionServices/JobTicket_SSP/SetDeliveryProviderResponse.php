<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetDeliveryProviderResponse
{

    /**
     * @var boolean $SetDeliveryProviderResult
     */
    protected $SetDeliveryProviderResult = null;

    /**
     * @param boolean $SetDeliveryProviderResult
     */
    public function __construct($SetDeliveryProviderResult = null)
    {
        $this->SetDeliveryProviderResult = $SetDeliveryProviderResult;
    }

    /**
     * @return boolean
     */
    public function getSetDeliveryProviderResult()
    {
        return $this->SetDeliveryProviderResult;
    }

    /**
     * @param boolean $SetDeliveryProviderResult
     * @return SetDeliveryProviderResponse
     */
    public function setSetDeliveryProviderResult($SetDeliveryProviderResult)
    {
        $this->SetDeliveryProviderResult = $SetDeliveryProviderResult;
        return $this;
    }

}

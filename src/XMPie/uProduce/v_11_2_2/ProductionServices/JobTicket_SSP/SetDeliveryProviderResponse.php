<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP\SetDeliveryProviderResponse
     */
    public function setSetDeliveryProviderResult($SetDeliveryProviderResult)
    {
      $this->SetDeliveryProviderResult = $SetDeliveryProviderResult;
      return $this;
    }

}

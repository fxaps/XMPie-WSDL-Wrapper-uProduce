<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\DeliveryProvider_SSP;

class ProviderCustomActionResponse
{

    /**
     * @var string $ProviderCustomActionResult
     */
    protected $ProviderCustomActionResult = null;

    /**
     * @param string $ProviderCustomActionResult
     */
    public function __construct($ProviderCustomActionResult = null)
    {
      $this->ProviderCustomActionResult = $ProviderCustomActionResult;
    }

    /**
     * @return string
     */
    public function getProviderCustomActionResult()
    {
      return $this->ProviderCustomActionResult;
    }

    /**
     * @param string $ProviderCustomActionResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\OtherServices\DeliveryProvider_SSP\ProviderCustomActionResponse
     */
    public function setProviderCustomActionResult($ProviderCustomActionResult)
    {
      $this->ProviderCustomActionResult = $ProviderCustomActionResult;
      return $this;
    }

}

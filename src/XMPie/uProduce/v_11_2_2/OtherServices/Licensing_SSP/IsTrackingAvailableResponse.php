<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\OtherServices\Licensing_SSP;

class IsTrackingAvailableResponse
{

    /**
     * @var boolean $IsTrackingAvailableResult
     */
    protected $IsTrackingAvailableResult = null;

    /**
     * @param boolean $IsTrackingAvailableResult
     */
    public function __construct($IsTrackingAvailableResult = null)
    {
      $this->IsTrackingAvailableResult = $IsTrackingAvailableResult;
    }

    /**
     * @return boolean
     */
    public function getIsTrackingAvailableResult()
    {
      return $this->IsTrackingAvailableResult;
    }

    /**
     * @param boolean $IsTrackingAvailableResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\OtherServices\Licensing_SSP\IsTrackingAvailableResponse
     */
    public function setIsTrackingAvailableResult($IsTrackingAvailableResult)
    {
      $this->IsTrackingAvailableResult = $IsTrackingAvailableResult;
      return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\OtherServices\Licensing_SSP;

class IsMIAvailableResponse
{

    /**
     * @var boolean $IsMIAvailableResult
     */
    protected $IsMIAvailableResult = null;

    /**
     * @param boolean $IsMIAvailableResult
     */
    public function __construct($IsMIAvailableResult = null)
    {
      $this->IsMIAvailableResult = $IsMIAvailableResult;
    }

    /**
     * @return boolean
     */
    public function getIsMIAvailableResult()
    {
      return $this->IsMIAvailableResult;
    }

    /**
     * @param boolean $IsMIAvailableResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\OtherServices\Licensing_SSP\IsMIAvailableResponse
     */
    public function setIsMIAvailableResult($IsMIAvailableResult)
    {
      $this->IsMIAvailableResult = $IsMIAvailableResult;
      return $this;
    }

}

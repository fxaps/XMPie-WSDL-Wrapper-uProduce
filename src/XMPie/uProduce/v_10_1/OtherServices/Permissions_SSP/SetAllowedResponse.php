<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\OtherServices\Permissions_SSP;

class SetAllowedResponse
{

    /**
     * @var boolean $SetAllowedResult
     */
    protected $SetAllowedResult = null;

    /**
     * @param boolean $SetAllowedResult
     */
    public function __construct($SetAllowedResult = null)
    {
      $this->SetAllowedResult = $SetAllowedResult;
    }

    /**
     * @return boolean
     */
    public function getSetAllowedResult()
    {
      return $this->SetAllowedResult;
    }

    /**
     * @param boolean $SetAllowedResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\OtherServices\Permissions_SSP\SetAllowedResponse
     */
    public function setSetAllowedResult($SetAllowedResult)
    {
      $this->SetAllowedResult = $SetAllowedResult;
      return $this;
    }

}

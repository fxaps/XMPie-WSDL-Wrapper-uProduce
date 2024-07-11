<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP;

class SetTurboInstancesLimitResponse
{

    /**
     * @var boolean $SetTurboInstancesLimitResult
     */
    protected $SetTurboInstancesLimitResult = null;

    /**
     * @param boolean $SetTurboInstancesLimitResult
     */
    public function __construct($SetTurboInstancesLimitResult = null)
    {
      $this->SetTurboInstancesLimitResult = $SetTurboInstancesLimitResult;
    }

    /**
     * @return boolean
     */
    public function getSetTurboInstancesLimitResult()
    {
      return $this->SetTurboInstancesLimitResult;
    }

    /**
     * @param boolean $SetTurboInstancesLimitResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\ProductionServices\JobTicket_SSP\SetTurboInstancesLimitResponse
     */
    public function setSetTurboInstancesLimitResult($SetTurboInstancesLimitResult)
    {
      $this->SetTurboInstancesLimitResult = $SetTurboInstancesLimitResult;
      return $this;
    }

}

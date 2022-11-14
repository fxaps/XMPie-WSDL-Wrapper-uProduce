<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP;

class SetJobTypeResponse
{

    /**
     * @var boolean $SetJobTypeResult
     */
    protected $SetJobTypeResult = null;

    /**
     * @param boolean $SetJobTypeResult
     */
    public function __construct($SetJobTypeResult = null)
    {
      $this->SetJobTypeResult = $SetJobTypeResult;
    }

    /**
     * @return boolean
     */
    public function getSetJobTypeResult()
    {
      return $this->SetJobTypeResult;
    }

    /**
     * @param boolean $SetJobTypeResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP\SetJobTypeResponse
     */
    public function setSetJobTypeResult($SetJobTypeResult)
    {
      $this->SetJobTypeResult = $SetJobTypeResult;
      return $this;
    }

}

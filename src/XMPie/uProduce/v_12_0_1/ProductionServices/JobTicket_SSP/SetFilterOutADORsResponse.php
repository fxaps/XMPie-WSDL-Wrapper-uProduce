<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\JobTicket_SSP;

class SetFilterOutADORsResponse
{

    /**
     * @var boolean $SetFilterOutADORsResult
     */
    protected $SetFilterOutADORsResult = null;

    /**
     * @param boolean $SetFilterOutADORsResult
     */
    public function __construct($SetFilterOutADORsResult = null)
    {
      $this->SetFilterOutADORsResult = $SetFilterOutADORsResult;
    }

    /**
     * @return boolean
     */
    public function getSetFilterOutADORsResult()
    {
      return $this->SetFilterOutADORsResult;
    }

    /**
     * @param boolean $SetFilterOutADORsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\ProductionServices\JobTicket_SSP\SetFilterOutADORsResponse
     */
    public function setSetFilterOutADORsResult($SetFilterOutADORsResult)
    {
      $this->SetFilterOutADORsResult = $SetFilterOutADORsResult;
      return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\ProductionServices\JobTicket_SSP;

class SetFilterInADORsResponse
{

    /**
     * @var boolean $SetFilterInADORsResult
     */
    protected $SetFilterInADORsResult = null;

    /**
     * @param boolean $SetFilterInADORsResult
     */
    public function __construct($SetFilterInADORsResult = null)
    {
      $this->SetFilterInADORsResult = $SetFilterInADORsResult;
    }

    /**
     * @return boolean
     */
    public function getSetFilterInADORsResult()
    {
      return $this->SetFilterInADORsResult;
    }

    /**
     * @param boolean $SetFilterInADORsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\ProductionServices\JobTicket_SSP\SetFilterInADORsResponse
     */
    public function setSetFilterInADORsResult($SetFilterInADORsResult)
    {
      $this->SetFilterInADORsResult = $SetFilterInADORsResult;
      return $this;
    }

}

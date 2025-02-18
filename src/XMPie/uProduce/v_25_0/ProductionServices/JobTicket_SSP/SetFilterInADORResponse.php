<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP;

class SetFilterInADORResponse
{

    /**
     * @var boolean $SetFilterInADORResult
     */
    protected $SetFilterInADORResult = null;

    /**
     * @param boolean $SetFilterInADORResult
     */
    public function __construct($SetFilterInADORResult = null)
    {
      $this->SetFilterInADORResult = $SetFilterInADORResult;
    }

    /**
     * @return boolean
     */
    public function getSetFilterInADORResult()
    {
      return $this->SetFilterInADORResult;
    }

    /**
     * @param boolean $SetFilterInADORResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP\SetFilterInADORResponse
     */
    public function setSetFilterInADORResult($SetFilterInADORResult)
    {
      $this->SetFilterInADORResult = $SetFilterInADORResult;
      return $this;
    }

}

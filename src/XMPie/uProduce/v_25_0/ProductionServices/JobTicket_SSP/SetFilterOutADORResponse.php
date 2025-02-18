<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP;

class SetFilterOutADORResponse
{

    /**
     * @var boolean $SetFilterOutADORResult
     */
    protected $SetFilterOutADORResult = null;

    /**
     * @param boolean $SetFilterOutADORResult
     */
    public function __construct($SetFilterOutADORResult = null)
    {
      $this->SetFilterOutADORResult = $SetFilterOutADORResult;
    }

    /**
     * @return boolean
     */
    public function getSetFilterOutADORResult()
    {
      return $this->SetFilterOutADORResult;
    }

    /**
     * @param boolean $SetFilterOutADORResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\ProductionServices\JobTicket_SSP\SetFilterOutADORResponse
     */
    public function setSetFilterOutADORResult($SetFilterOutADORResult)
    {
      $this->SetFilterOutADORResult = $SetFilterOutADORResult;
      return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\JobTicket_SSP;

class RemoveFilterOutADORResponse
{

    /**
     * @var boolean $RemoveFilterOutADORResult
     */
    protected $RemoveFilterOutADORResult = null;

    /**
     * @param boolean $RemoveFilterOutADORResult
     */
    public function __construct($RemoveFilterOutADORResult = null)
    {
      $this->RemoveFilterOutADORResult = $RemoveFilterOutADORResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveFilterOutADORResult()
    {
      return $this->RemoveFilterOutADORResult;
    }

    /**
     * @param boolean $RemoveFilterOutADORResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\ProductionServices\JobTicket_SSP\RemoveFilterOutADORResponse
     */
    public function setRemoveFilterOutADORResult($RemoveFilterOutADORResult)
    {
      $this->RemoveFilterOutADORResult = $RemoveFilterOutADORResult;
      return $this;
    }

}

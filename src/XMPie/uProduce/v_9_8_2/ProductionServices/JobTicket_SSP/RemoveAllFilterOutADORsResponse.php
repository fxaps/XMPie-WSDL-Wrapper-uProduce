<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveAllFilterOutADORsResponse
{

    /**
     * @var boolean $RemoveAllFilterOutADORsResult
     */
    protected $RemoveAllFilterOutADORsResult = null;

    /**
     * @param boolean $RemoveAllFilterOutADORsResult
     */
    public function __construct($RemoveAllFilterOutADORsResult = null)
    {
      $this->RemoveAllFilterOutADORsResult = $RemoveAllFilterOutADORsResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllFilterOutADORsResult()
    {
      return $this->RemoveAllFilterOutADORsResult;
    }

    /**
     * @param boolean $RemoveAllFilterOutADORsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP\RemoveAllFilterOutADORsResponse
     */
    public function setRemoveAllFilterOutADORsResult($RemoveAllFilterOutADORsResult)
    {
      $this->RemoveAllFilterOutADORsResult = $RemoveAllFilterOutADORsResult;
      return $this;
    }

}

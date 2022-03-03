<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\ProductionServices\JobTicket_SSP;

class RemoveAllFilterInADORsResponse
{

    /**
     * @var boolean $RemoveAllFilterInADORsResult
     */
    protected $RemoveAllFilterInADORsResult = null;

    /**
     * @param boolean $RemoveAllFilterInADORsResult
     */
    public function __construct($RemoveAllFilterInADORsResult = null)
    {
      $this->RemoveAllFilterInADORsResult = $RemoveAllFilterInADORsResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllFilterInADORsResult()
    {
      return $this->RemoveAllFilterInADORsResult;
    }

    /**
     * @param boolean $RemoveAllFilterInADORsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\ProductionServices\JobTicket_SSP\RemoveAllFilterInADORsResponse
     */
    public function setRemoveAllFilterInADORsResult($RemoveAllFilterInADORsResult)
    {
      $this->RemoveAllFilterInADORsResult = $RemoveAllFilterInADORsResult;
      return $this;
    }

}

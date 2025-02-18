<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PlanPartsProvider_SSP;

class ClearCacheResponse
{

    /**
     * @var boolean $ClearCacheResult
     */
    protected $ClearCacheResult = null;

    /**
     * @param boolean $ClearCacheResult
     */
    public function __construct($ClearCacheResult = null)
    {
      $this->ClearCacheResult = $ClearCacheResult;
    }

    /**
     * @return boolean
     */
    public function getClearCacheResult()
    {
      return $this->ClearCacheResult;
    }

    /**
     * @param boolean $ClearCacheResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\PlanPartsProvider_SSP\ClearCacheResponse
     */
    public function setClearCacheResult($ClearCacheResult)
    {
      $this->ClearCacheResult = $ClearCacheResult;
      return $this;
    }

}

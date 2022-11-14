<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP;

class SetAssetSourcesExResponse
{

    /**
     * @var boolean $SetAssetSourcesExResult
     */
    protected $SetAssetSourcesExResult = null;

    /**
     * @param boolean $SetAssetSourcesExResult
     */
    public function __construct($SetAssetSourcesExResult = null)
    {
      $this->SetAssetSourcesExResult = $SetAssetSourcesExResult;
    }

    /**
     * @return boolean
     */
    public function getSetAssetSourcesExResult()
    {
      return $this->SetAssetSourcesExResult;
    }

    /**
     * @param boolean $SetAssetSourcesExResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\ProductionServices\JobTicket_SSP\SetAssetSourcesExResponse
     */
    public function setSetAssetSourcesExResult($SetAssetSourcesExResult)
    {
      $this->SetAssetSourcesExResult = $SetAssetSourcesExResult;
      return $this;
    }

}

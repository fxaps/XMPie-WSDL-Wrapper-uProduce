<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\SystemManager_SSP;

class GetProductInfoResponse
{

    /**
     * @var ProductInfo $GetProductInfoResult
     */
    protected $GetProductInfoResult = null;

    /**
     * @param ProductInfo $GetProductInfoResult
     */
    public function __construct($GetProductInfoResult = null)
    {
      $this->GetProductInfoResult = $GetProductInfoResult;
    }

    /**
     * @return ProductInfo
     */
    public function getGetProductInfoResult()
    {
      return $this->GetProductInfoResult;
    }

    /**
     * @param ProductInfo $GetProductInfoResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\SystemManager_SSP\GetProductInfoResponse
     */
    public function setGetProductInfoResult($GetProductInfoResult)
    {
      $this->GetProductInfoResult = $GetProductInfoResult;
      return $this;
    }

}

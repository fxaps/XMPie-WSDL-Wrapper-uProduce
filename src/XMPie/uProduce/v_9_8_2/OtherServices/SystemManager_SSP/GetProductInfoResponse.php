<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\SystemManager_SSP;

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
     * @return GetProductInfoResponse
     */
    public function setGetProductInfoResult($GetProductInfoResult)
    {
        $this->GetProductInfoResult = $GetProductInfoResult;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\SystemManager_SSP;

class GetProductInfoForUserResponse
{

    /**
     * @var ProductInfo $GetProductInfoForUserResult
     */
    protected $GetProductInfoForUserResult = null;

    /**
     * @param ProductInfo $GetProductInfoForUserResult
     */
    public function __construct($GetProductInfoForUserResult = null)
    {
        $this->GetProductInfoForUserResult = $GetProductInfoForUserResult;
    }

    /**
     * @return ProductInfo
     */
    public function getGetProductInfoForUserResult()
    {
        return $this->GetProductInfoForUserResult;
    }

    /**
     * @param ProductInfo $GetProductInfoForUserResult
     * @return GetProductInfoForUserResponse
     */
    public function setGetProductInfoForUserResult($GetProductInfoForUserResult)
    {
        $this->GetProductInfoForUserResult = $GetProductInfoForUserResult;
        return $this;
    }

}

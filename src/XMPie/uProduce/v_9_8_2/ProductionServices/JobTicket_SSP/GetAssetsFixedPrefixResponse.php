<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetAssetsFixedPrefixResponse
{

    /**
     * @var string $GetAssetsFixedPrefixResult
     */
    protected $GetAssetsFixedPrefixResult = null;

    /**
     * @param string $GetAssetsFixedPrefixResult
     */
    public function __construct($GetAssetsFixedPrefixResult = null)
    {
        $this->GetAssetsFixedPrefixResult = $GetAssetsFixedPrefixResult;
    }

    /**
     * @return string
     */
    public function getGetAssetsFixedPrefixResult()
    {
        return $this->GetAssetsFixedPrefixResult;
    }

    /**
     * @param string $GetAssetsFixedPrefixResult
     * @return GetAssetsFixedPrefixResponse
     */
    public function setGetAssetsFixedPrefixResult($GetAssetsFixedPrefixResult)
    {
        $this->GetAssetsFixedPrefixResult = $GetAssetsFixedPrefixResult;
        return $this;
    }

}

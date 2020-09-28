<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetAssetsPrefixTypeResponse
{

    /**
     * @var string $GetAssetsPrefixTypeResult
     */
    protected $GetAssetsPrefixTypeResult = null;

    /**
     * @param string $GetAssetsPrefixTypeResult
     */
    public function __construct($GetAssetsPrefixTypeResult = null)
    {
        $this->GetAssetsPrefixTypeResult = $GetAssetsPrefixTypeResult;
    }

    /**
     * @return string
     */
    public function getGetAssetsPrefixTypeResult()
    {
        return $this->GetAssetsPrefixTypeResult;
    }

    /**
     * @param string $GetAssetsPrefixTypeResult
     * @return GetAssetsPrefixTypeResponse
     */
    public function setGetAssetsPrefixTypeResult($GetAssetsPrefixTypeResult)
    {
        $this->GetAssetsPrefixTypeResult = $GetAssetsPrefixTypeResult;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetAssetSourcesNamesResponse
{

    /**
     * @var ArrayOfString $GetAssetSourcesNamesResult
     */
    protected $GetAssetSourcesNamesResult = null;

    /**
     * @param ArrayOfString $GetAssetSourcesNamesResult
     */
    public function __construct($GetAssetSourcesNamesResult = null)
    {
        $this->GetAssetSourcesNamesResult = $GetAssetSourcesNamesResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetAssetSourcesNamesResult()
    {
        return $this->GetAssetSourcesNamesResult;
    }

    /**
     * @param ArrayOfString $GetAssetSourcesNamesResult
     * @return GetAssetSourcesNamesResponse
     */
    public function setGetAssetSourcesNamesResult($GetAssetSourcesNamesResult)
    {
        $this->GetAssetSourcesNamesResult = $GetAssetSourcesNamesResult;
        return $this;
    }

}

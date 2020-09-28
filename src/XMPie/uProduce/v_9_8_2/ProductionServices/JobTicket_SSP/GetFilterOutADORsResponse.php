<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetFilterOutADORsResponse
{

    /**
     * @var ArrayOfString $GetFilterOutADORsResult
     */
    protected $GetFilterOutADORsResult = null;

    /**
     * @param ArrayOfString $GetFilterOutADORsResult
     */
    public function __construct($GetFilterOutADORsResult = null)
    {
        $this->GetFilterOutADORsResult = $GetFilterOutADORsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetFilterOutADORsResult()
    {
        return $this->GetFilterOutADORsResult;
    }

    /**
     * @param ArrayOfString $GetFilterOutADORsResult
     * @return GetFilterOutADORsResponse
     */
    public function setGetFilterOutADORsResult($GetFilterOutADORsResult)
    {
        $this->GetFilterOutADORsResult = $GetFilterOutADORsResult;
        return $this;
    }

}

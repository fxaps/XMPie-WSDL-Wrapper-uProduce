<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetFilterInADORsResponse
{

    /**
     * @var ArrayOfString $GetFilterInADORsResult
     */
    protected $GetFilterInADORsResult = null;

    /**
     * @param ArrayOfString $GetFilterInADORsResult
     */
    public function __construct($GetFilterInADORsResult = null)
    {
        $this->GetFilterInADORsResult = $GetFilterInADORsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetFilterInADORsResult()
    {
        return $this->GetFilterInADORsResult;
    }

    /**
     * @param ArrayOfString $GetFilterInADORsResult
     * @return GetFilterInADORsResponse
     */
    public function setGetFilterInADORsResult($GetFilterInADORsResult)
    {
        $this->GetFilterInADORsResult = $GetFilterInADORsResult;
        return $this;
    }

}

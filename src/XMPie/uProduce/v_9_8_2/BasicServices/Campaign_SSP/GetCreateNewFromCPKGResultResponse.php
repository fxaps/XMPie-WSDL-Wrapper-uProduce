<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetCreateNewFromCPKGResultResponse
{

    /**
     * @var CreateCampaignResult $GetCreateNewFromCPKGResultResult
     */
    protected $GetCreateNewFromCPKGResultResult = null;

    /**
     * @param CreateCampaignResult $GetCreateNewFromCPKGResultResult
     */
    public function __construct($GetCreateNewFromCPKGResultResult = null)
    {
        $this->GetCreateNewFromCPKGResultResult = $GetCreateNewFromCPKGResultResult;
    }

    /**
     * @return CreateCampaignResult
     */
    public function getGetCreateNewFromCPKGResultResult()
    {
        return $this->GetCreateNewFromCPKGResultResult;
    }

    /**
     * @param CreateCampaignResult $GetCreateNewFromCPKGResultResult
     * @return GetCreateNewFromCPKGResultResponse
     */
    public function setGetCreateNewFromCPKGResultResult($GetCreateNewFromCPKGResultResult)
    {
        $this->GetCreateNewFromCPKGResultResult = $GetCreateNewFromCPKGResultResult;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetCreateNewFromVPCResultResponse
{

    /**
     * @var CreateCampaignResult $GetCreateNewFromVPCResultResult
     */
    protected $GetCreateNewFromVPCResultResult = null;

    /**
     * @param CreateCampaignResult $GetCreateNewFromVPCResultResult
     */
    public function __construct($GetCreateNewFromVPCResultResult = null)
    {
        $this->GetCreateNewFromVPCResultResult = $GetCreateNewFromVPCResultResult;
    }

    /**
     * @return CreateCampaignResult
     */
    public function getGetCreateNewFromVPCResultResult()
    {
        return $this->GetCreateNewFromVPCResultResult;
    }

    /**
     * @param CreateCampaignResult $GetCreateNewFromVPCResultResult
     * @return GetCreateNewFromVPCResultResponse
     */
    public function setGetCreateNewFromVPCResultResult($GetCreateNewFromVPCResultResult)
    {
        $this->GetCreateNewFromVPCResultResult = $GetCreateNewFromVPCResultResult;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetRIOnDemandRecipientInfoResponse
{

    /**
     * @var string $GetRIOnDemandRecipientInfoResult
     */
    protected $GetRIOnDemandRecipientInfoResult = null;

    /**
     * @param string $GetRIOnDemandRecipientInfoResult
     */
    public function __construct($GetRIOnDemandRecipientInfoResult = null)
    {
        $this->GetRIOnDemandRecipientInfoResult = $GetRIOnDemandRecipientInfoResult;
    }

    /**
     * @return string
     */
    public function getGetRIOnDemandRecipientInfoResult()
    {
        return $this->GetRIOnDemandRecipientInfoResult;
    }

    /**
     * @param string $GetRIOnDemandRecipientInfoResult
     * @return GetRIOnDemandRecipientInfoResponse
     */
    public function setGetRIOnDemandRecipientInfoResult($GetRIOnDemandRecipientInfoResult)
    {
        $this->GetRIOnDemandRecipientInfoResult = $GetRIOnDemandRecipientInfoResult;
        return $this;
    }

}

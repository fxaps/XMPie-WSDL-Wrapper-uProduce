<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\InteractiveCampaign_SSP;

class GetADORsValuesForRecipientsResponse
{

    /**
     * @var GetADORsValuesForRecipientsResult $GetADORsValuesForRecipientsResult
     */
    protected $GetADORsValuesForRecipientsResult = null;

    /**
     * @param GetADORsValuesForRecipientsResult $GetADORsValuesForRecipientsResult
     */
    public function __construct($GetADORsValuesForRecipientsResult = null)
    {
        $this->GetADORsValuesForRecipientsResult = $GetADORsValuesForRecipientsResult;
    }

    /**
     * @return GetADORsValuesForRecipientsResult
     */
    public function getGetADORsValuesForRecipientsResult()
    {
        return $this->GetADORsValuesForRecipientsResult;
    }

    /**
     * @param GetADORsValuesForRecipientsResult $GetADORsValuesForRecipientsResult
     * @return GetADORsValuesForRecipientsResponse
     */
    public function setGetADORsValuesForRecipientsResult($GetADORsValuesForRecipientsResult)
    {
        $this->GetADORsValuesForRecipientsResult = $GetADORsValuesForRecipientsResult;
        return $this;
    }

}

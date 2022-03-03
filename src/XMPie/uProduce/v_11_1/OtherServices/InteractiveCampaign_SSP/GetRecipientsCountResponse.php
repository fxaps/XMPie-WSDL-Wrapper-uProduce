<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\OtherServices\InteractiveCampaign_SSP;

class GetRecipientsCountResponse
{

    /**
     * @var int $GetRecipientsCountResult
     */
    protected $GetRecipientsCountResult = null;

    /**
     * @param int $GetRecipientsCountResult
     */
    public function __construct($GetRecipientsCountResult = null)
    {
      $this->GetRecipientsCountResult = $GetRecipientsCountResult;
    }

    /**
     * @return int
     */
    public function getGetRecipientsCountResult()
    {
      return $this->GetRecipientsCountResult;
    }

    /**
     * @param int $GetRecipientsCountResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\OtherServices\InteractiveCampaign_SSP\GetRecipientsCountResponse
     */
    public function setGetRecipientsCountResult($GetRecipientsCountResult)
    {
      $this->GetRecipientsCountResult = $GetRecipientsCountResult;
      return $this;
    }

}

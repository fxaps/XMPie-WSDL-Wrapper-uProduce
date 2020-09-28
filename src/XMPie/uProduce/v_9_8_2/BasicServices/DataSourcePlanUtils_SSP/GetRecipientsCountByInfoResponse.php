<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSourcePlanUtils_SSP;

class GetRecipientsCountByInfoResponse
{

    /**
     * @var int $GetRecipientsCountByInfoResult
     */
    protected $GetRecipientsCountByInfoResult = null;

    /**
     * @param int $GetRecipientsCountByInfoResult
     */
    public function __construct($GetRecipientsCountByInfoResult = null)
    {
        $this->GetRecipientsCountByInfoResult = $GetRecipientsCountByInfoResult;
    }

    /**
     * @return int
     */
    public function getGetRecipientsCountByInfoResult()
    {
        return $this->GetRecipientsCountByInfoResult;
    }

    /**
     * @param int $GetRecipientsCountByInfoResult
     * @return GetRecipientsCountByInfoResponse
     */
    public function setGetRecipientsCountByInfoResult($GetRecipientsCountByInfoResult)
    {
        $this->GetRecipientsCountByInfoResult = $GetRecipientsCountByInfoResult;
        return $this;
    }

}

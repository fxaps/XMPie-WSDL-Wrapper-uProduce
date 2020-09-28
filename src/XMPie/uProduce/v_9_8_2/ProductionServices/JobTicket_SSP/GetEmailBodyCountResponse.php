<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetEmailBodyCountResponse
{

    /**
     * @var int $GetEmailBodyCountResult
     */
    protected $GetEmailBodyCountResult = null;

    /**
     * @param int $GetEmailBodyCountResult
     */
    public function __construct($GetEmailBodyCountResult = null)
    {
        $this->GetEmailBodyCountResult = $GetEmailBodyCountResult;
    }

    /**
     * @return int
     */
    public function getGetEmailBodyCountResult()
    {
        return $this->GetEmailBodyCountResult;
    }

    /**
     * @param int $GetEmailBodyCountResult
     * @return GetEmailBodyCountResponse
     */
    public function setGetEmailBodyCountResult($GetEmailBodyCountResult)
    {
        $this->GetEmailBodyCountResult = $GetEmailBodyCountResult;
        return $this;
    }

}

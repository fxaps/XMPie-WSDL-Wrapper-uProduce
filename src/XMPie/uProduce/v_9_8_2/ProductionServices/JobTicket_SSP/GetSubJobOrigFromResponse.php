<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetSubJobOrigFromResponse
{

    /**
     * @var int $GetSubJobOrigFromResult
     */
    protected $GetSubJobOrigFromResult = null;

    /**
     * @param int $GetSubJobOrigFromResult
     */
    public function __construct($GetSubJobOrigFromResult = null)
    {
        $this->GetSubJobOrigFromResult = $GetSubJobOrigFromResult;
    }

    /**
     * @return int
     */
    public function getGetSubJobOrigFromResult()
    {
        return $this->GetSubJobOrigFromResult;
    }

    /**
     * @param int $GetSubJobOrigFromResult
     * @return GetSubJobOrigFromResponse
     */
    public function setGetSubJobOrigFromResult($GetSubJobOrigFromResult)
    {
        $this->GetSubJobOrigFromResult = $GetSubJobOrigFromResult;
        return $this;
    }

}

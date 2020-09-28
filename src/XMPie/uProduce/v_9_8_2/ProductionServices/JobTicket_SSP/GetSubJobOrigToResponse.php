<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetSubJobOrigToResponse
{

    /**
     * @var int $GetSubJobOrigToResult
     */
    protected $GetSubJobOrigToResult = null;

    /**
     * @param int $GetSubJobOrigToResult
     */
    public function __construct($GetSubJobOrigToResult = null)
    {
        $this->GetSubJobOrigToResult = $GetSubJobOrigToResult;
    }

    /**
     * @return int
     */
    public function getGetSubJobOrigToResult()
    {
        return $this->GetSubJobOrigToResult;
    }

    /**
     * @param int $GetSubJobOrigToResult
     * @return GetSubJobOrigToResponse
     */
    public function setGetSubJobOrigToResult($GetSubJobOrigToResult)
    {
        $this->GetSubJobOrigToResult = $GetSubJobOrigToResult;
        return $this;
    }

}

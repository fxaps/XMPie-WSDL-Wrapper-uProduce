<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetRIToResponse
{

    /**
     * @var int $GetRIToResult
     */
    protected $GetRIToResult = null;

    /**
     * @param int $GetRIToResult
     */
    public function __construct($GetRIToResult = null)
    {
        $this->GetRIToResult = $GetRIToResult;
    }

    /**
     * @return int
     */
    public function getGetRIToResult()
    {
        return $this->GetRIToResult;
    }

    /**
     * @param int $GetRIToResult
     * @return GetRIToResponse
     */
    public function setGetRIToResult($GetRIToResult)
    {
        $this->GetRIToResult = $GetRIToResult;
        return $this;
    }

}

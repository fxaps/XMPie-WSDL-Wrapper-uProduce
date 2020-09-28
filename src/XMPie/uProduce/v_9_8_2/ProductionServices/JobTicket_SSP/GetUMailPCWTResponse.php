<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetUMailPCWTResponse
{

    /**
     * @var string $GetUMailPCWTResult
     */
    protected $GetUMailPCWTResult = null;

    /**
     * @param string $GetUMailPCWTResult
     */
    public function __construct($GetUMailPCWTResult = null)
    {
        $this->GetUMailPCWTResult = $GetUMailPCWTResult;
    }

    /**
     * @return string
     */
    public function getGetUMailPCWTResult()
    {
        return $this->GetUMailPCWTResult;
    }

    /**
     * @param string $GetUMailPCWTResult
     * @return GetUMailPCWTResponse
     */
    public function setGetUMailPCWTResult($GetUMailPCWTResult)
    {
        $this->GetUMailPCWTResult = $GetUMailPCWTResult;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\JobMessage_SSP;

class GetParamsResponse
{

    /**
     * @var string $GetParamsResult
     */
    protected $GetParamsResult = null;

    /**
     * @param string $GetParamsResult
     */
    public function __construct($GetParamsResult = null)
    {
        $this->GetParamsResult = $GetParamsResult;
    }

    /**
     * @return string
     */
    public function getGetParamsResult()
    {
        return $this->GetParamsResult;
    }

    /**
     * @param string $GetParamsResult
     * @return GetParamsResponse
     */
    public function setGetParamsResult($GetParamsResult)
    {
        $this->GetParamsResult = $GetParamsResult;
        return $this;
    }

}

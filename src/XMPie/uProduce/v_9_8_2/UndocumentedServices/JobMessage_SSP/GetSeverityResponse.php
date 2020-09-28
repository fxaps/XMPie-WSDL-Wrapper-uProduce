<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\JobMessage_SSP;

class GetSeverityResponse
{

    /**
     * @var string $GetSeverityResult
     */
    protected $GetSeverityResult = null;

    /**
     * @param string $GetSeverityResult
     */
    public function __construct($GetSeverityResult = null)
    {
        $this->GetSeverityResult = $GetSeverityResult;
    }

    /**
     * @return string
     */
    public function getGetSeverityResult()
    {
        return $this->GetSeverityResult;
    }

    /**
     * @param string $GetSeverityResult
     * @return GetSeverityResponse
     */
    public function setGetSeverityResult($GetSeverityResult)
    {
        $this->GetSeverityResult = $GetSeverityResult;
        return $this;
    }

}

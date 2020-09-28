<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetUMailTemplateResponse
{

    /**
     * @var string $GetUMailTemplateResult
     */
    protected $GetUMailTemplateResult = null;

    /**
     * @param string $GetUMailTemplateResult
     */
    public function __construct($GetUMailTemplateResult = null)
    {
        $this->GetUMailTemplateResult = $GetUMailTemplateResult;
    }

    /**
     * @return string
     */
    public function getGetUMailTemplateResult()
    {
        return $this->GetUMailTemplateResult;
    }

    /**
     * @param string $GetUMailTemplateResult
     * @return GetUMailTemplateResponse
     */
    public function setGetUMailTemplateResult($GetUMailTemplateResult)
    {
        $this->GetUMailTemplateResult = $GetUMailTemplateResult;
        return $this;
    }

}

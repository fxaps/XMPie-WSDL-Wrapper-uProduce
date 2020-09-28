<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetOutputParameterResponse
{

    /**
     * @var Parameter $GetOutputParameterResult
     */
    protected $GetOutputParameterResult = null;

    /**
     * @param Parameter $GetOutputParameterResult
     */
    public function __construct($GetOutputParameterResult = null)
    {
        $this->GetOutputParameterResult = $GetOutputParameterResult;
    }

    /**
     * @return Parameter
     */
    public function getGetOutputParameterResult()
    {
        return $this->GetOutputParameterResult;
    }

    /**
     * @param Parameter $GetOutputParameterResult
     * @return GetOutputParameterResponse
     */
    public function setGetOutputParameterResult($GetOutputParameterResult)
    {
        $this->GetOutputParameterResult = $GetOutputParameterResult;
        return $this;
    }

}

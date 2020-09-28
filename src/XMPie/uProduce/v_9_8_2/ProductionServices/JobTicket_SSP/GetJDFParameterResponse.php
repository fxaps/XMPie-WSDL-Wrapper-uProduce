<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetJDFParameterResponse
{

    /**
     * @var Parameter $GetJDFParameterResult
     */
    protected $GetJDFParameterResult = null;

    /**
     * @param Parameter $GetJDFParameterResult
     */
    public function __construct($GetJDFParameterResult = null)
    {
        $this->GetJDFParameterResult = $GetJDFParameterResult;
    }

    /**
     * @return Parameter
     */
    public function getGetJDFParameterResult()
    {
        return $this->GetJDFParameterResult;
    }

    /**
     * @param Parameter $GetJDFParameterResult
     * @return GetJDFParameterResponse
     */
    public function setGetJDFParameterResult($GetJDFParameterResult)
    {
        $this->GetJDFParameterResult = $GetJDFParameterResult;
        return $this;
    }

}

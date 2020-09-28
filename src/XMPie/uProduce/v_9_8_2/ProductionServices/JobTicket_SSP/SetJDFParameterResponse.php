<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetJDFParameterResponse
{

    /**
     * @var boolean $SetJDFParameterResult
     */
    protected $SetJDFParameterResult = null;

    /**
     * @param boolean $SetJDFParameterResult
     */
    public function __construct($SetJDFParameterResult = null)
    {
        $this->SetJDFParameterResult = $SetJDFParameterResult;
    }

    /**
     * @return boolean
     */
    public function getSetJDFParameterResult()
    {
        return $this->SetJDFParameterResult;
    }

    /**
     * @param boolean $SetJDFParameterResult
     * @return SetJDFParameterResponse
     */
    public function setSetJDFParameterResult($SetJDFParameterResult)
    {
        $this->SetJDFParameterResult = $SetJDFParameterResult;
        return $this;
    }

}

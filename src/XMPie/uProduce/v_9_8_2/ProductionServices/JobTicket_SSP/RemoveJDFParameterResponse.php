<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveJDFParameterResponse
{

    /**
     * @var boolean $RemoveJDFParameterResult
     */
    protected $RemoveJDFParameterResult = null;

    /**
     * @param boolean $RemoveJDFParameterResult
     */
    public function __construct($RemoveJDFParameterResult = null)
    {
        $this->RemoveJDFParameterResult = $RemoveJDFParameterResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveJDFParameterResult()
    {
        return $this->RemoveJDFParameterResult;
    }

    /**
     * @param boolean $RemoveJDFParameterResult
     * @return RemoveJDFParameterResponse
     */
    public function setRemoveJDFParameterResult($RemoveJDFParameterResult)
    {
        $this->RemoveJDFParameterResult = $RemoveJDFParameterResult;
        return $this;
    }

}

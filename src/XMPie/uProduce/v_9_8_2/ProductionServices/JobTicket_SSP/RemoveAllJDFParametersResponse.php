<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveAllJDFParametersResponse
{

    /**
     * @var boolean $RemoveAllJDFParametersResult
     */
    protected $RemoveAllJDFParametersResult = null;

    /**
     * @param boolean $RemoveAllJDFParametersResult
     */
    public function __construct($RemoveAllJDFParametersResult = null)
    {
        $this->RemoveAllJDFParametersResult = $RemoveAllJDFParametersResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveAllJDFParametersResult()
    {
        return $this->RemoveAllJDFParametersResult;
    }

    /**
     * @param boolean $RemoveAllJDFParametersResult
     * @return RemoveAllJDFParametersResponse
     */
    public function setRemoveAllJDFParametersResult($RemoveAllJDFParametersResult)
    {
        $this->RemoveAllJDFParametersResult = $RemoveAllJDFParametersResult;
        return $this;
    }

}

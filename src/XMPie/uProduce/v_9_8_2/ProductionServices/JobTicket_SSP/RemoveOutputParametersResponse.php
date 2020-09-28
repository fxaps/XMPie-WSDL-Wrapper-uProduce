<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveOutputParametersResponse
{

    /**
     * @var boolean $RemoveOutputParametersResult
     */
    protected $RemoveOutputParametersResult = null;

    /**
     * @param boolean $RemoveOutputParametersResult
     */
    public function __construct($RemoveOutputParametersResult = null)
    {
        $this->RemoveOutputParametersResult = $RemoveOutputParametersResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveOutputParametersResult()
    {
        return $this->RemoveOutputParametersResult;
    }

    /**
     * @param boolean $RemoveOutputParametersResult
     * @return RemoveOutputParametersResponse
     */
    public function setRemoveOutputParametersResult($RemoveOutputParametersResult)
    {
        $this->RemoveOutputParametersResult = $RemoveOutputParametersResult;
        return $this;
    }

}

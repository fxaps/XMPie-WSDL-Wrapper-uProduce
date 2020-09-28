<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveOutputParameterResponse
{

    /**
     * @var boolean $RemoveOutputParameterResult
     */
    protected $RemoveOutputParameterResult = null;

    /**
     * @param boolean $RemoveOutputParameterResult
     */
    public function __construct($RemoveOutputParameterResult = null)
    {
        $this->RemoveOutputParameterResult = $RemoveOutputParameterResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveOutputParameterResult()
    {
        return $this->RemoveOutputParameterResult;
    }

    /**
     * @param boolean $RemoveOutputParameterResult
     * @return RemoveOutputParameterResponse
     */
    public function setRemoveOutputParameterResult($RemoveOutputParameterResult)
    {
        $this->RemoveOutputParameterResult = $RemoveOutputParameterResult;
        return $this;
    }

}

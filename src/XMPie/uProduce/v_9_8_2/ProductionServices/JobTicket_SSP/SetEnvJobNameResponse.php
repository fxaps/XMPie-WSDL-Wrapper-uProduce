<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetEnvJobNameResponse
{

    /**
     * @var boolean $SetEnvJobNameResult
     */
    protected $SetEnvJobNameResult = null;

    /**
     * @param boolean $SetEnvJobNameResult
     */
    public function __construct($SetEnvJobNameResult = null)
    {
        $this->SetEnvJobNameResult = $SetEnvJobNameResult;
    }

    /**
     * @return boolean
     */
    public function getSetEnvJobNameResult()
    {
        return $this->SetEnvJobNameResult;
    }

    /**
     * @param boolean $SetEnvJobNameResult
     * @return SetEnvJobNameResponse
     */
    public function setSetEnvJobNameResult($SetEnvJobNameResult)
    {
        $this->SetEnvJobNameResult = $SetEnvJobNameResult;
        return $this;
    }

}

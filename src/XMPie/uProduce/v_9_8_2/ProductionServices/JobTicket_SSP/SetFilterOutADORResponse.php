<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetFilterOutADORResponse
{

    /**
     * @var boolean $SetFilterOutADORResult
     */
    protected $SetFilterOutADORResult = null;

    /**
     * @param boolean $SetFilterOutADORResult
     */
    public function __construct($SetFilterOutADORResult = null)
    {
        $this->SetFilterOutADORResult = $SetFilterOutADORResult;
    }

    /**
     * @return boolean
     */
    public function getSetFilterOutADORResult()
    {
        return $this->SetFilterOutADORResult;
    }

    /**
     * @param boolean $SetFilterOutADORResult
     * @return SetFilterOutADORResponse
     */
    public function setSetFilterOutADORResult($SetFilterOutADORResult)
    {
        $this->SetFilterOutADORResult = $SetFilterOutADORResult;
        return $this;
    }

}

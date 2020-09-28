<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetPortLinkResponse
{

    /**
     * @var boolean $SetPortLinkResult
     */
    protected $SetPortLinkResult = null;

    /**
     * @param boolean $SetPortLinkResult
     */
    public function __construct($SetPortLinkResult = null)
    {
        $this->SetPortLinkResult = $SetPortLinkResult;
    }

    /**
     * @return boolean
     */
    public function getSetPortLinkResult()
    {
        return $this->SetPortLinkResult;
    }

    /**
     * @param boolean $SetPortLinkResult
     * @return SetPortLinkResponse
     */
    public function setSetPortLinkResult($SetPortLinkResult)
    {
        $this->SetPortLinkResult = $SetPortLinkResult;
        return $this;
    }

}

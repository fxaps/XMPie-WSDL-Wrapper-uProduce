<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetEmailInfoResponse
{

    /**
     * @var boolean $SetEmailInfoResult
     */
    protected $SetEmailInfoResult = null;

    /**
     * @param boolean $SetEmailInfoResult
     */
    public function __construct($SetEmailInfoResult = null)
    {
        $this->SetEmailInfoResult = $SetEmailInfoResult;
    }

    /**
     * @return boolean
     */
    public function getSetEmailInfoResult()
    {
        return $this->SetEmailInfoResult;
    }

    /**
     * @param boolean $SetEmailInfoResult
     * @return SetEmailInfoResponse
     */
    public function setSetEmailInfoResult($SetEmailInfoResult)
    {
        $this->SetEmailInfoResult = $SetEmailInfoResult;
        return $this;
    }

}

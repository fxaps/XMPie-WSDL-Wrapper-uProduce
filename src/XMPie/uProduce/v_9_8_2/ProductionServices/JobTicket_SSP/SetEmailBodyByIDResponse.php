<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetEmailBodyByIDResponse
{

    /**
     * @var boolean $SetEmailBodyByIDResult
     */
    protected $SetEmailBodyByIDResult = null;

    /**
     * @param boolean $SetEmailBodyByIDResult
     */
    public function __construct($SetEmailBodyByIDResult = null)
    {
        $this->SetEmailBodyByIDResult = $SetEmailBodyByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetEmailBodyByIDResult()
    {
        return $this->SetEmailBodyByIDResult;
    }

    /**
     * @param boolean $SetEmailBodyByIDResult
     * @return SetEmailBodyByIDResponse
     */
    public function setSetEmailBodyByIDResult($SetEmailBodyByIDResult)
    {
        $this->SetEmailBodyByIDResult = $SetEmailBodyByIDResult;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class AddEmailBodyByIDResponse
{

    /**
     * @var boolean $AddEmailBodyByIDResult
     */
    protected $AddEmailBodyByIDResult = null;

    /**
     * @param boolean $AddEmailBodyByIDResult
     */
    public function __construct($AddEmailBodyByIDResult = null)
    {
        $this->AddEmailBodyByIDResult = $AddEmailBodyByIDResult;
    }

    /**
     * @return boolean
     */
    public function getAddEmailBodyByIDResult()
    {
        return $this->AddEmailBodyByIDResult;
    }

    /**
     * @param boolean $AddEmailBodyByIDResult
     * @return AddEmailBodyByIDResponse
     */
    public function setAddEmailBodyByIDResult($AddEmailBodyByIDResult)
    {
        $this->AddEmailBodyByIDResult = $AddEmailBodyByIDResult;
        return $this;
    }

}

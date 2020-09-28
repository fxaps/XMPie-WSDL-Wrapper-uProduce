<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetRIByIDResponse
{

    /**
     * @var boolean $SetRIByIDResult
     */
    protected $SetRIByIDResult = null;

    /**
     * @param boolean $SetRIByIDResult
     */
    public function __construct($SetRIByIDResult = null)
    {
        $this->SetRIByIDResult = $SetRIByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetRIByIDResult()
    {
        return $this->SetRIByIDResult;
    }

    /**
     * @param boolean $SetRIByIDResult
     * @return SetRIByIDResponse
     */
    public function setSetRIByIDResult($SetRIByIDResult)
    {
        $this->SetRIByIDResult = $SetRIByIDResult;
        return $this;
    }

}

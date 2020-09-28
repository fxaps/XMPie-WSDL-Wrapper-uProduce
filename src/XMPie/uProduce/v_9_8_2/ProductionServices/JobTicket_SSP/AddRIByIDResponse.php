<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class AddRIByIDResponse
{

    /**
     * @var boolean $AddRIByIDResult
     */
    protected $AddRIByIDResult = null;

    /**
     * @param boolean $AddRIByIDResult
     */
    public function __construct($AddRIByIDResult = null)
    {
        $this->AddRIByIDResult = $AddRIByIDResult;
    }

    /**
     * @return boolean
     */
    public function getAddRIByIDResult()
    {
        return $this->AddRIByIDResult;
    }

    /**
     * @param boolean $AddRIByIDResult
     * @return AddRIByIDResponse
     */
    public function setAddRIByIDResult($AddRIByIDResult)
    {
        $this->AddRIByIDResult = $AddRIByIDResult;
        return $this;
    }

}

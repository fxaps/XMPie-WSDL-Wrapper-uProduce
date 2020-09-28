<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class AddRIResponse
{

    /**
     * @var boolean $AddRIResult
     */
    protected $AddRIResult = null;

    /**
     * @param boolean $AddRIResult
     */
    public function __construct($AddRIResult = null)
    {
        $this->AddRIResult = $AddRIResult;
    }

    /**
     * @return boolean
     */
    public function getAddRIResult()
    {
        return $this->AddRIResult;
    }

    /**
     * @param boolean $AddRIResult
     * @return AddRIResponse
     */
    public function setAddRIResult($AddRIResult)
    {
        $this->AddRIResult = $AddRIResult;
        return $this;
    }

}

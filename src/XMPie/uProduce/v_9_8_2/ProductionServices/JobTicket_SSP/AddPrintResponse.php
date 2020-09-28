<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class AddPrintResponse
{

    /**
     * @var boolean $AddPrintResult
     */
    protected $AddPrintResult = null;

    /**
     * @param boolean $AddPrintResult
     */
    public function __construct($AddPrintResult = null)
    {
        $this->AddPrintResult = $AddPrintResult;
    }

    /**
     * @return boolean
     */
    public function getAddPrintResult()
    {
        return $this->AddPrintResult;
    }

    /**
     * @param boolean $AddPrintResult
     * @return AddPrintResponse
     */
    public function setAddPrintResult($AddPrintResult)
    {
        $this->AddPrintResult = $AddPrintResult;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class AddEmailBodyResponse
{

    /**
     * @var boolean $AddEmailBodyResult
     */
    protected $AddEmailBodyResult = null;

    /**
     * @param boolean $AddEmailBodyResult
     */
    public function __construct($AddEmailBodyResult = null)
    {
        $this->AddEmailBodyResult = $AddEmailBodyResult;
    }

    /**
     * @return boolean
     */
    public function getAddEmailBodyResult()
    {
        return $this->AddEmailBodyResult;
    }

    /**
     * @param boolean $AddEmailBodyResult
     * @return AddEmailBodyResponse
     */
    public function setAddEmailBodyResult($AddEmailBodyResult)
    {
        $this->AddEmailBodyResult = $AddEmailBodyResult;
        return $this;
    }

}

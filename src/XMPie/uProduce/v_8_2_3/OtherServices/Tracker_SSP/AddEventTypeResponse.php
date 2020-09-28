<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\Tracker_SSP;

class AddEventTypeResponse
{

    /**
     * @var boolean $AddEventTypeResult
     */
    protected $AddEventTypeResult = null;

    /**
     * @param boolean $AddEventTypeResult
     */
    public function __construct($AddEventTypeResult = null)
    {
        $this->AddEventTypeResult = $AddEventTypeResult;
    }

    /**
     * @return boolean
     */
    public function getAddEventTypeResult()
    {
        return $this->AddEventTypeResult;
    }

    /**
     * @param boolean $AddEventTypeResult
     * @return AddEventTypeResponse
     */
    public function setAddEventTypeResult($AddEventTypeResult)
    {
        $this->AddEventTypeResult = $AddEventTypeResult;
        return $this;
    }

}

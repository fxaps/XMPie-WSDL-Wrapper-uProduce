<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Tracker_SSP;

class AddEventResponse
{

    /**
     * @var boolean $AddEventResult
     */
    protected $AddEventResult = null;

    /**
     * @param boolean $AddEventResult
     */
    public function __construct($AddEventResult = null)
    {
        $this->AddEventResult = $AddEventResult;
    }

    /**
     * @return boolean
     */
    public function getAddEventResult()
    {
        return $this->AddEventResult;
    }

    /**
     * @param boolean $AddEventResult
     * @return AddEventResponse
     */
    public function setAddEventResult($AddEventResult)
    {
        $this->AddEventResult = $AddEventResult;
        return $this;
    }

}

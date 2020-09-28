<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\Tracker_SSP;

class AddEventByRunResponse
{

    /**
     * @var boolean $AddEventByRunResult
     */
    protected $AddEventByRunResult = null;

    /**
     * @param boolean $AddEventByRunResult
     */
    public function __construct($AddEventByRunResult = null)
    {
        $this->AddEventByRunResult = $AddEventByRunResult;
    }

    /**
     * @return boolean
     */
    public function getAddEventByRunResult()
    {
        return $this->AddEventByRunResult;
    }

    /**
     * @param boolean $AddEventByRunResult
     * @return AddEventByRunResponse
     */
    public function setAddEventByRunResult($AddEventByRunResult)
    {
        $this->AddEventByRunResult = $AddEventByRunResult;
        return $this;
    }

}

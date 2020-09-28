<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\Tracker_SSP;

class AddEventsResponse
{

    /**
     * @var boolean $AddEventsResult
     */
    protected $AddEventsResult = null;

    /**
     * @param boolean $AddEventsResult
     */
    public function __construct($AddEventsResult = null)
    {
        $this->AddEventsResult = $AddEventsResult;
    }

    /**
     * @return boolean
     */
    public function getAddEventsResult()
    {
        return $this->AddEventsResult;
    }

    /**
     * @param boolean $AddEventsResult
     * @return AddEventsResponse
     */
    public function setAddEventsResult($AddEventsResult)
    {
        $this->AddEventsResult = $AddEventsResult;
        return $this;
    }

}

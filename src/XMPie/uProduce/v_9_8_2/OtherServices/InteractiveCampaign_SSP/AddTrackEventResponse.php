<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\InteractiveCampaign_SSP;

class AddTrackEventResponse
{

    /**
     * @var boolean $AddTrackEventResult
     */
    protected $AddTrackEventResult = null;

    /**
     * @param boolean $AddTrackEventResult
     */
    public function __construct($AddTrackEventResult = null)
    {
        $this->AddTrackEventResult = $AddTrackEventResult;
    }

    /**
     * @return boolean
     */
    public function getAddTrackEventResult()
    {
        return $this->AddTrackEventResult;
    }

    /**
     * @param boolean $AddTrackEventResult
     * @return AddTrackEventResponse
     */
    public function setAddTrackEventResult($AddTrackEventResult)
    {
        $this->AddTrackEventResult = $AddTrackEventResult;
        return $this;
    }

}

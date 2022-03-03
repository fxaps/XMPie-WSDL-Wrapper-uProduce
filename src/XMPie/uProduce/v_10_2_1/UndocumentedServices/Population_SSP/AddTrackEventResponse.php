<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\Population_SSP;

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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\Population_SSP\AddTrackEventResponse
     */
    public function setAddTrackEventResult($AddTrackEventResult)
    {
      $this->AddTrackEventResult = $AddTrackEventResult;
      return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\SystemManager_SSP;

class SetCircleModeAvailableResponse
{

    /**
     * @var boolean $SetCircleModeAvailableResult
     */
    protected $SetCircleModeAvailableResult = null;

    /**
     * @param boolean $SetCircleModeAvailableResult
     */
    public function __construct($SetCircleModeAvailableResult = null)
    {
        $this->SetCircleModeAvailableResult = $SetCircleModeAvailableResult;
    }

    /**
     * @return boolean
     */
    public function getSetCircleModeAvailableResult()
    {
        return $this->SetCircleModeAvailableResult;
    }

    /**
     * @param boolean $SetCircleModeAvailableResult
     * @return SetCircleModeAvailableResponse
     */
    public function setSetCircleModeAvailableResult($SetCircleModeAvailableResult)
    {
        $this->SetCircleModeAvailableResult = $SetCircleModeAvailableResult;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class RemoveTrackingParametersResponse
{

    /**
     * @var boolean $RemoveTrackingParametersResult
     */
    protected $RemoveTrackingParametersResult = null;

    /**
     * @param boolean $RemoveTrackingParametersResult
     */
    public function __construct($RemoveTrackingParametersResult = null)
    {
        $this->RemoveTrackingParametersResult = $RemoveTrackingParametersResult;
    }

    /**
     * @return boolean
     */
    public function getRemoveTrackingParametersResult()
    {
        return $this->RemoveTrackingParametersResult;
    }

    /**
     * @param boolean $RemoveTrackingParametersResult
     * @return RemoveTrackingParametersResponse
     */
    public function setRemoveTrackingParametersResult($RemoveTrackingParametersResult)
    {
        $this->RemoveTrackingParametersResult = $RemoveTrackingParametersResult;
        return $this;
    }

}

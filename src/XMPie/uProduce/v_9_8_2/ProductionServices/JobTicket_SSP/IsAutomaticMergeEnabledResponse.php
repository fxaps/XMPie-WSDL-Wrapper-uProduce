<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class IsAutomaticMergeEnabledResponse
{

    /**
     * @var boolean $IsAutomaticMergeEnabledResult
     */
    protected $IsAutomaticMergeEnabledResult = null;

    /**
     * @param boolean $IsAutomaticMergeEnabledResult
     */
    public function __construct($IsAutomaticMergeEnabledResult = null)
    {
        $this->IsAutomaticMergeEnabledResult = $IsAutomaticMergeEnabledResult;
    }

    /**
     * @return boolean
     */
    public function getIsAutomaticMergeEnabledResult()
    {
        return $this->IsAutomaticMergeEnabledResult;
    }

    /**
     * @param boolean $IsAutomaticMergeEnabledResult
     * @return IsAutomaticMergeEnabledResponse
     */
    public function setIsAutomaticMergeEnabledResult($IsAutomaticMergeEnabledResult)
    {
        $this->IsAutomaticMergeEnabledResult = $IsAutomaticMergeEnabledResult;
        return $this;
    }

}

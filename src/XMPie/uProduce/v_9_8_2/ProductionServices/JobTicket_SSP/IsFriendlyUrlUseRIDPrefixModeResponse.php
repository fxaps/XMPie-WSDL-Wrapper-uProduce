<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class IsFriendlyUrlUseRIDPrefixModeResponse
{

    /**
     * @var boolean $IsFriendlyUrlUseRIDPrefixModeResult
     */
    protected $IsFriendlyUrlUseRIDPrefixModeResult = null;

    /**
     * @param boolean $IsFriendlyUrlUseRIDPrefixModeResult
     */
    public function __construct($IsFriendlyUrlUseRIDPrefixModeResult = null)
    {
        $this->IsFriendlyUrlUseRIDPrefixModeResult = $IsFriendlyUrlUseRIDPrefixModeResult;
    }

    /**
     * @return boolean
     */
    public function getIsFriendlyUrlUseRIDPrefixModeResult()
    {
        return $this->IsFriendlyUrlUseRIDPrefixModeResult;
    }

    /**
     * @param boolean $IsFriendlyUrlUseRIDPrefixModeResult
     * @return IsFriendlyUrlUseRIDPrefixModeResponse
     */
    public function setIsFriendlyUrlUseRIDPrefixModeResult($IsFriendlyUrlUseRIDPrefixModeResult)
    {
        $this->IsFriendlyUrlUseRIDPrefixModeResult = $IsFriendlyUrlUseRIDPrefixModeResult;
        return $this;
    }

}

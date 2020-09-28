<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class SetTrackAllTextADORsResponse
{

    /**
     * @var boolean $SetTrackAllTextADORsResult
     */
    protected $SetTrackAllTextADORsResult = null;

    /**
     * @param boolean $SetTrackAllTextADORsResult
     */
    public function __construct($SetTrackAllTextADORsResult = null)
    {
        $this->SetTrackAllTextADORsResult = $SetTrackAllTextADORsResult;
    }

    /**
     * @return boolean
     */
    public function getSetTrackAllTextADORsResult()
    {
        return $this->SetTrackAllTextADORsResult;
    }

    /**
     * @param boolean $SetTrackAllTextADORsResult
     * @return SetTrackAllTextADORsResponse
     */
    public function setSetTrackAllTextADORsResult($SetTrackAllTextADORsResult)
    {
        $this->SetTrackAllTextADORsResult = $SetTrackAllTextADORsResult;
        return $this;
    }

}

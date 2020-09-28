<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetFFPMIDResponse
{

    /**
     * @var string $GetFFPMIDResult
     */
    protected $GetFFPMIDResult = null;

    /**
     * @param string $GetFFPMIDResult
     */
    public function __construct($GetFFPMIDResult = null)
    {
        $this->GetFFPMIDResult = $GetFFPMIDResult;
    }

    /**
     * @return string
     */
    public function getGetFFPMIDResult()
    {
        return $this->GetFFPMIDResult;
    }

    /**
     * @param string $GetFFPMIDResult
     * @return GetFFPMIDResponse
     */
    public function setGetFFPMIDResult($GetFFPMIDResult)
    {
        $this->GetFFPMIDResult = $GetFFPMIDResult;
        return $this;
    }

}

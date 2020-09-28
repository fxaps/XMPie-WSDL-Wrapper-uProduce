<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetFFPMExecutablePathResponse
{

    /**
     * @var string $GetFFPMExecutablePathResult
     */
    protected $GetFFPMExecutablePathResult = null;

    /**
     * @param string $GetFFPMExecutablePathResult
     */
    public function __construct($GetFFPMExecutablePathResult = null)
    {
        $this->GetFFPMExecutablePathResult = $GetFFPMExecutablePathResult;
    }

    /**
     * @return string
     */
    public function getGetFFPMExecutablePathResult()
    {
        return $this->GetFFPMExecutablePathResult;
    }

    /**
     * @param string $GetFFPMExecutablePathResult
     * @return GetFFPMExecutablePathResponse
     */
    public function setGetFFPMExecutablePathResult($GetFFPMExecutablePathResult)
    {
        $this->GetFFPMExecutablePathResult = $GetFFPMExecutablePathResult;
        return $this;
    }

}

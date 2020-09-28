<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetPopulationGUIDResponse
{

    /**
     * @var string $GetPopulationGUIDResult
     */
    protected $GetPopulationGUIDResult = null;

    /**
     * @param string $GetPopulationGUIDResult
     */
    public function __construct($GetPopulationGUIDResult = null)
    {
        $this->GetPopulationGUIDResult = $GetPopulationGUIDResult;
    }

    /**
     * @return string
     */
    public function getGetPopulationGUIDResult()
    {
        return $this->GetPopulationGUIDResult;
    }

    /**
     * @param string $GetPopulationGUIDResult
     * @return GetPopulationGUIDResponse
     */
    public function setGetPopulationGUIDResult($GetPopulationGUIDResult)
    {
        $this->GetPopulationGUIDResult = $GetPopulationGUIDResult;
        return $this;
    }

}

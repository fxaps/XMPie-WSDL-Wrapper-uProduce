<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\InteractiveCampaign_SSP;

class GetIDResponse
{

    /**
     * @var string $GetIDResult
     */
    protected $GetIDResult = null;

    /**
     * @param string $GetIDResult
     */
    public function __construct($GetIDResult = null)
    {
        $this->GetIDResult = $GetIDResult;
    }

    /**
     * @return string
     */
    public function getGetIDResult()
    {
        return $this->GetIDResult;
    }

    /**
     * @param string $GetIDResult
     * @return GetIDResponse
     */
    public function setGetIDResult($GetIDResult)
    {
        $this->GetIDResult = $GetIDResult;
        return $this;
    }

}

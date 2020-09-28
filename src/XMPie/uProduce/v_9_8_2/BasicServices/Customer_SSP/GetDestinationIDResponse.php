<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class GetDestinationIDResponse
{

    /**
     * @var string $GetDestinationIDResult
     */
    protected $GetDestinationIDResult = null;

    /**
     * @param string $GetDestinationIDResult
     */
    public function __construct($GetDestinationIDResult = null)
    {
        $this->GetDestinationIDResult = $GetDestinationIDResult;
    }

    /**
     * @return string
     */
    public function getGetDestinationIDResult()
    {
        return $this->GetDestinationIDResult;
    }

    /**
     * @param string $GetDestinationIDResult
     * @return GetDestinationIDResponse
     */
    public function setGetDestinationIDResult($GetDestinationIDResult)
    {
        $this->GetDestinationIDResult = $GetDestinationIDResult;
        return $this;
    }

}

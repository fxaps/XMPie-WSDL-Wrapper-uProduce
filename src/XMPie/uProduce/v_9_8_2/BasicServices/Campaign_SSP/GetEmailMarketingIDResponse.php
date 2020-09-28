<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class GetEmailMarketingIDResponse
{

    /**
     * @var string $GetEmailMarketingIDResult
     */
    protected $GetEmailMarketingIDResult = null;

    /**
     * @param string $GetEmailMarketingIDResult
     */
    public function __construct($GetEmailMarketingIDResult = null)
    {
        $this->GetEmailMarketingIDResult = $GetEmailMarketingIDResult;
    }

    /**
     * @return string
     */
    public function getGetEmailMarketingIDResult()
    {
        return $this->GetEmailMarketingIDResult;
    }

    /**
     * @param string $GetEmailMarketingIDResult
     * @return GetEmailMarketingIDResponse
     */
    public function setGetEmailMarketingIDResult($GetEmailMarketingIDResult)
    {
        $this->GetEmailMarketingIDResult = $GetEmailMarketingIDResult;
        return $this;
    }

}

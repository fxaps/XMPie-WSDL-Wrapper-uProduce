<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetSecondaryRemoteCopyIDResponse
{

    /**
     * @var string $GetSecondaryRemoteCopyIDResult
     */
    protected $GetSecondaryRemoteCopyIDResult = null;

    /**
     * @param string $GetSecondaryRemoteCopyIDResult
     */
    public function __construct($GetSecondaryRemoteCopyIDResult = null)
    {
        $this->GetSecondaryRemoteCopyIDResult = $GetSecondaryRemoteCopyIDResult;
    }

    /**
     * @return string
     */
    public function getGetSecondaryRemoteCopyIDResult()
    {
        return $this->GetSecondaryRemoteCopyIDResult;
    }

    /**
     * @param string $GetSecondaryRemoteCopyIDResult
     * @return GetSecondaryRemoteCopyIDResponse
     */
    public function setGetSecondaryRemoteCopyIDResult($GetSecondaryRemoteCopyIDResult)
    {
        $this->GetSecondaryRemoteCopyIDResult = $GetSecondaryRemoteCopyIDResult;
        return $this;
    }

}

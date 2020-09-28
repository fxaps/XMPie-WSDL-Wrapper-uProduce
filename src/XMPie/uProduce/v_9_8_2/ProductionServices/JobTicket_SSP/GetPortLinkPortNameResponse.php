<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetPortLinkPortNameResponse
{

    /**
     * @var string $GetPortLinkPortNameResult
     */
    protected $GetPortLinkPortNameResult = null;

    /**
     * @param string $GetPortLinkPortNameResult
     */
    public function __construct($GetPortLinkPortNameResult = null)
    {
        $this->GetPortLinkPortNameResult = $GetPortLinkPortNameResult;
    }

    /**
     * @return string
     */
    public function getGetPortLinkPortNameResult()
    {
        return $this->GetPortLinkPortNameResult;
    }

    /**
     * @param string $GetPortLinkPortNameResult
     * @return GetPortLinkPortNameResponse
     */
    public function setGetPortLinkPortNameResult($GetPortLinkPortNameResult)
    {
        $this->GetPortLinkPortNameResult = $GetPortLinkPortNameResult;
        return $this;
    }

}

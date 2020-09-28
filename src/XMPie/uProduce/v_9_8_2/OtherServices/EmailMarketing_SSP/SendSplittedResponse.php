<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class SendSplittedResponse
{

    /**
     * @var ArrayOfString $SendSplittedResult
     */
    protected $SendSplittedResult = null;

    /**
     * @param ArrayOfString $SendSplittedResult
     */
    public function __construct($SendSplittedResult = null)
    {
        $this->SendSplittedResult = $SendSplittedResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getSendSplittedResult()
    {
        return $this->SendSplittedResult;
    }

    /**
     * @param ArrayOfString $SendSplittedResult
     * @return SendSplittedResponse
     */
    public function setSendSplittedResult($SendSplittedResult)
    {
        $this->SendSplittedResult = $SendSplittedResult;
        return $this;
    }

}

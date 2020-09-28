<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class SendResponse
{

    /**
     * @var string $SendResult
     */
    protected $SendResult = null;

    /**
     * @param string $SendResult
     */
    public function __construct($SendResult = null)
    {
        $this->SendResult = $SendResult;
    }

    /**
     * @return string
     */
    public function getSendResult()
    {
        return $this->SendResult;
    }

    /**
     * @param string $SendResult
     * @return SendResponse
     */
    public function setSendResult($SendResult)
    {
        $this->SendResult = $SendResult;
        return $this;
    }

}

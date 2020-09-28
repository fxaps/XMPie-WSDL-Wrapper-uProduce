<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\InteractiveCampaign_SSP;

class SendMailResponse
{

    /**
     * @var ArrayOfSendEmailResult $SendMailResult
     */
    protected $SendMailResult = null;

    /**
     * @param ArrayOfSendEmailResult $SendMailResult
     */
    public function __construct($SendMailResult = null)
    {
        $this->SendMailResult = $SendMailResult;
    }

    /**
     * @return ArrayOfSendEmailResult
     */
    public function getSendMailResult()
    {
        return $this->SendMailResult;
    }

    /**
     * @param ArrayOfSendEmailResult $SendMailResult
     * @return SendMailResponse
     */
    public function setSendMailResult($SendMailResult)
    {
        $this->SendMailResult = $SendMailResult;
        return $this;
    }

}

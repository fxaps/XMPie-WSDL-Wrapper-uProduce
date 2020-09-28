<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\EmailServices_SSP;

class SendMailResponse
{

    /**
     * @var boolean $SendMailResult
     */
    protected $SendMailResult = null;

    /**
     * @param boolean $SendMailResult
     */
    public function __construct($SendMailResult = null)
    {
        $this->SendMailResult = $SendMailResult;
    }

    /**
     * @return boolean
     */
    public function getSendMailResult()
    {
        return $this->SendMailResult;
    }

    /**
     * @param boolean $SendMailResult
     * @return SendMailResponse
     */
    public function setSendMailResult($SendMailResult)
    {
        $this->SendMailResult = $SendMailResult;
        return $this;
    }

}

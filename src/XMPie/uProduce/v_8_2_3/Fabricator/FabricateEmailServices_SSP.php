<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\SendMail;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\SendMailResponse;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatus;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatusResponse;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatus;
use XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatusResponse;


class FabricateEmailServices_SSP
{
    private $paramAutoSet;

    /**
     * Constructor.
     *
     * @param array $paramAutoSet
     */
    public function __construct($paramAutoSet = [])
    {
        $this->setParamAutoSet($paramAutoSet);
    }


    /**
     * @return array
     */
    public function getParamAutoSet()
    {
        return $this->paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     */
    public function setParamAutoSet($paramAutoSet)
    {
        $this->paramAutoSet = $paramAutoSet;
    }


    /**
     * @param array $paramAutoSet
     * @return SendMail
     */
    public function SendMail($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendMail = new SendMail();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendMail, $methodName)) {
                $SendMail->$methodName($paramValue);
            }
        }
        return $SendMail;
    }


    /**
     * @param array $paramAutoSet
     * @return SendMailResponse
     */
    public function SendMailResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SendMailResponse = new SendMailResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SendMailResponse, $methodName)) {
                $SendMailResponse->$methodName($paramValue);
            }
        }
        return $SendMailResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return SetEmailSubscriptionStatus
     */
    public function SetEmailSubscriptionStatus($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetEmailSubscriptionStatus = new SetEmailSubscriptionStatus();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetEmailSubscriptionStatus, $methodName)) {
                $SetEmailSubscriptionStatus->$methodName($paramValue);
            }
        }
        return $SetEmailSubscriptionStatus;
    }


    /**
     * @param array $paramAutoSet
     * @return SetEmailSubscriptionStatusResponse
     */
    public function SetEmailSubscriptionStatusResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetEmailSubscriptionStatusResponse = new SetEmailSubscriptionStatusResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetEmailSubscriptionStatusResponse, $methodName)) {
                $SetEmailSubscriptionStatusResponse->$methodName($paramValue);
            }
        }
        return $SetEmailSubscriptionStatusResponse;
    }


    /**
     * @param array $paramAutoSet
     * @return GetEmailSubscriptionStatus
     */
    public function GetEmailSubscriptionStatus($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetEmailSubscriptionStatus = new GetEmailSubscriptionStatus();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetEmailSubscriptionStatus, $methodName)) {
                $GetEmailSubscriptionStatus->$methodName($paramValue);
            }
        }
        return $GetEmailSubscriptionStatus;
    }


    /**
     * @param array $paramAutoSet
     * @return GetEmailSubscriptionStatusResponse
     */
    public function GetEmailSubscriptionStatusResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetEmailSubscriptionStatusResponse = new GetEmailSubscriptionStatusResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetEmailSubscriptionStatusResponse, $methodName)) {
                $GetEmailSubscriptionStatusResponse->$methodName($paramValue);
            }
        }
        return $GetEmailSubscriptionStatusResponse;
    }


}

?>

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\SendMail;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\SendMailResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatus;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\SetEmailSubscriptionStatusResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatus;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\GetEmailSubscriptionStatusResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\ExportAccountEmailSubscribers;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\ArrayOfProperty;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\Property;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\ExportAccountEmailSubscribersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\ExportCampaignEmailSubscribers;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\ExportCampaignEmailSubscribersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\ImportAccountEmailSubscribers;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\ImportAccountEmailSubscribersResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\SetAccountEmailSubscriberStatus;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\SetAccountEmailSubscriberStatusResponse;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\GetAccountEmailSubscriberStatus;
use XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\EmailServices_SSP\GetAccountEmailSubscriberStatusResponse;


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


   /**
    * @param array $paramAutoSet
    * @return ExportAccountEmailSubscribers
    */
    public function ExportAccountEmailSubscribers($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ExportAccountEmailSubscribers = new ExportAccountEmailSubscribers();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ExportAccountEmailSubscribers, $methodName)) {
                $ExportAccountEmailSubscribers->$methodName($paramValue);
            }
        }
        return $ExportAccountEmailSubscribers;
    }


   /**
    * @param array $paramAutoSet
    * @return ArrayOfProperty
    */
    public function ArrayOfProperty($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ArrayOfProperty = new ArrayOfProperty();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ArrayOfProperty, $methodName)) {
                $ArrayOfProperty->$methodName($paramValue);
            }
        }
        return $ArrayOfProperty;
    }


   /**
    * @param array $paramAutoSet
    * @return Property
    */
    public function Property($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $Property = new Property();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($Property, $methodName)) {
                $Property->$methodName($paramValue);
            }
        }
        return $Property;
    }


   /**
    * @param array $paramAutoSet
    * @return ExportAccountEmailSubscribersResponse
    */
    public function ExportAccountEmailSubscribersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ExportAccountEmailSubscribersResponse = new ExportAccountEmailSubscribersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ExportAccountEmailSubscribersResponse, $methodName)) {
                $ExportAccountEmailSubscribersResponse->$methodName($paramValue);
            }
        }
        return $ExportAccountEmailSubscribersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ExportCampaignEmailSubscribers
    */
    public function ExportCampaignEmailSubscribers($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ExportCampaignEmailSubscribers = new ExportCampaignEmailSubscribers();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ExportCampaignEmailSubscribers, $methodName)) {
                $ExportCampaignEmailSubscribers->$methodName($paramValue);
            }
        }
        return $ExportCampaignEmailSubscribers;
    }


   /**
    * @param array $paramAutoSet
    * @return ExportCampaignEmailSubscribersResponse
    */
    public function ExportCampaignEmailSubscribersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ExportCampaignEmailSubscribersResponse = new ExportCampaignEmailSubscribersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ExportCampaignEmailSubscribersResponse, $methodName)) {
                $ExportCampaignEmailSubscribersResponse->$methodName($paramValue);
            }
        }
        return $ExportCampaignEmailSubscribersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return ImportAccountEmailSubscribers
    */
    public function ImportAccountEmailSubscribers($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ImportAccountEmailSubscribers = new ImportAccountEmailSubscribers();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ImportAccountEmailSubscribers, $methodName)) {
                $ImportAccountEmailSubscribers->$methodName($paramValue);
            }
        }
        return $ImportAccountEmailSubscribers;
    }


   /**
    * @param array $paramAutoSet
    * @return ImportAccountEmailSubscribersResponse
    */
    public function ImportAccountEmailSubscribersResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $ImportAccountEmailSubscribersResponse = new ImportAccountEmailSubscribersResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($ImportAccountEmailSubscribersResponse, $methodName)) {
                $ImportAccountEmailSubscribersResponse->$methodName($paramValue);
            }
        }
        return $ImportAccountEmailSubscribersResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAccountEmailSubscriberStatus
    */
    public function SetAccountEmailSubscriberStatus($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAccountEmailSubscriberStatus = new SetAccountEmailSubscriberStatus();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAccountEmailSubscriberStatus, $methodName)) {
                $SetAccountEmailSubscriberStatus->$methodName($paramValue);
            }
        }
        return $SetAccountEmailSubscriberStatus;
    }


   /**
    * @param array $paramAutoSet
    * @return SetAccountEmailSubscriberStatusResponse
    */
    public function SetAccountEmailSubscriberStatusResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $SetAccountEmailSubscriberStatusResponse = new SetAccountEmailSubscriberStatusResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($SetAccountEmailSubscriberStatusResponse, $methodName)) {
                $SetAccountEmailSubscriberStatusResponse->$methodName($paramValue);
            }
        }
        return $SetAccountEmailSubscriberStatusResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountEmailSubscriberStatus
    */
    public function GetAccountEmailSubscriberStatus($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountEmailSubscriberStatus = new GetAccountEmailSubscriberStatus();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountEmailSubscriberStatus, $methodName)) {
                $GetAccountEmailSubscriberStatus->$methodName($paramValue);
            }
        }
        return $GetAccountEmailSubscriberStatus;
    }


   /**
    * @param array $paramAutoSet
    * @return GetAccountEmailSubscriberStatusResponse
    */
    public function GetAccountEmailSubscriberStatusResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $GetAccountEmailSubscriberStatusResponse = new GetAccountEmailSubscriberStatusResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($GetAccountEmailSubscriberStatusResponse, $methodName)) {
                $GetAccountEmailSubscriberStatusResponse->$methodName($paramValue);
            }
        }
        return $GetAccountEmailSubscriberStatusResponse;
    }



}

?>

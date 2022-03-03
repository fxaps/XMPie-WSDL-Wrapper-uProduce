<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_2_1\Fabricator;


use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\MessagesUtils_SSP\DecodeMessage;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\MessagesUtils_SSP\DecodeMessageResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\MessagesUtils_SSP\DecodeContext;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\MessagesUtils_SSP\DecodeContextResponse;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\MessagesUtils_SSP\DecodeSeverity;
use XMPieWsdlClient\XMPie\uProduce\v_10_2_1\UndocumentedServices\MessagesUtils_SSP\DecodeSeverityResponse;


class FabricateMessagesUtils_SSP
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
    * @return DecodeMessage
    */
    public function DecodeMessage($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DecodeMessage = new DecodeMessage();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DecodeMessage, $methodName)) {
                $DecodeMessage->$methodName($paramValue);
            }
        }
        return $DecodeMessage;
    }


   /**
    * @param array $paramAutoSet
    * @return DecodeMessageResponse
    */
    public function DecodeMessageResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DecodeMessageResponse = new DecodeMessageResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DecodeMessageResponse, $methodName)) {
                $DecodeMessageResponse->$methodName($paramValue);
            }
        }
        return $DecodeMessageResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DecodeContext
    */
    public function DecodeContext($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DecodeContext = new DecodeContext();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DecodeContext, $methodName)) {
                $DecodeContext->$methodName($paramValue);
            }
        }
        return $DecodeContext;
    }


   /**
    * @param array $paramAutoSet
    * @return DecodeContextResponse
    */
    public function DecodeContextResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DecodeContextResponse = new DecodeContextResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DecodeContextResponse, $methodName)) {
                $DecodeContextResponse->$methodName($paramValue);
            }
        }
        return $DecodeContextResponse;
    }


   /**
    * @param array $paramAutoSet
    * @return DecodeSeverity
    */
    public function DecodeSeverity($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DecodeSeverity = new DecodeSeverity();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DecodeSeverity, $methodName)) {
                $DecodeSeverity->$methodName($paramValue);
            }
        }
        return $DecodeSeverity;
    }


   /**
    * @param array $paramAutoSet
    * @return DecodeSeverityResponse
    */
    public function DecodeSeverityResponse($paramAutoSet = [])
    {
        $paramAutoSet = array_merge($this->paramAutoSet, $paramAutoSet);
        $DecodeSeverityResponse = new DecodeSeverityResponse();
        foreach ($paramAutoSet as $paramKey => $paramValue) {
            $methodName = 'set' . $paramKey;
            if (method_exists($DecodeSeverityResponse, $methodName)) {
                $DecodeSeverityResponse->$methodName($paramValue);
            }
        }
        return $DecodeSeverityResponse;
    }



}

?>

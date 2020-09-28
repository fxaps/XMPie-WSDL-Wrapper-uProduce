<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class GetADORInfoXMLResponse
{

    /**
     * @var GetADORInfoXMLResult $GetADORInfoXMLResult
     */
    protected $GetADORInfoXMLResult = null;

    /**
     * @param GetADORInfoXMLResult $GetADORInfoXMLResult
     */
    public function __construct($GetADORInfoXMLResult = null)
    {
        $this->GetADORInfoXMLResult = $GetADORInfoXMLResult;
    }

    /**
     * @return GetADORInfoXMLResult
     */
    public function getGetADORInfoXMLResult()
    {
        return $this->GetADORInfoXMLResult;
    }

    /**
     * @param GetADORInfoXMLResult $GetADORInfoXMLResult
     * @return GetADORInfoXMLResponse
     */
    public function setGetADORInfoXMLResult($GetADORInfoXMLResult)
    {
        $this->GetADORInfoXMLResult = $GetADORInfoXMLResult;
        return $this;
    }

}

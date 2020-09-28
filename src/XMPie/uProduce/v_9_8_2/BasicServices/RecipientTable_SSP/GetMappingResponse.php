<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\RecipientTable_SSP;

class GetMappingResponse
{

    /**
     * @var FieldMappings $GetMappingResult
     */
    protected $GetMappingResult = null;

    /**
     * @param FieldMappings $GetMappingResult
     */
    public function __construct($GetMappingResult = null)
    {
        $this->GetMappingResult = $GetMappingResult;
    }

    /**
     * @return FieldMappings
     */
    public function getGetMappingResult()
    {
        return $this->GetMappingResult;
    }

    /**
     * @param FieldMappings $GetMappingResult
     * @return GetMappingResponse
     */
    public function setGetMappingResult($GetMappingResult)
    {
        $this->GetMappingResult = $GetMappingResult;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetFieldMappingsResponse
{

    /**
     * @var FieldMappings $GetFieldMappingsResult
     */
    protected $GetFieldMappingsResult = null;

    /**
     * @param FieldMappings $GetFieldMappingsResult
     */
    public function __construct($GetFieldMappingsResult = null)
    {
        $this->GetFieldMappingsResult = $GetFieldMappingsResult;
    }

    /**
     * @return FieldMappings
     */
    public function getGetFieldMappingsResult()
    {
        return $this->GetFieldMappingsResult;
    }

    /**
     * @param FieldMappings $GetFieldMappingsResult
     * @return GetFieldMappingsResponse
     */
    public function setGetFieldMappingsResult($GetFieldMappingsResult)
    {
        $this->GetFieldMappingsResult = $GetFieldMappingsResult;
        return $this;
    }

}

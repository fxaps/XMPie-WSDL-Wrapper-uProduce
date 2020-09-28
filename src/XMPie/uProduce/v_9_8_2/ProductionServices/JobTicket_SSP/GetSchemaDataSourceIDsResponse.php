<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetSchemaDataSourceIDsResponse
{

    /**
     * @var ArrayOfString $GetSchemaDataSourceIDsResult
     */
    protected $GetSchemaDataSourceIDsResult = null;

    /**
     * @param ArrayOfString $GetSchemaDataSourceIDsResult
     */
    public function __construct($GetSchemaDataSourceIDsResult = null)
    {
        $this->GetSchemaDataSourceIDsResult = $GetSchemaDataSourceIDsResult;
    }

    /**
     * @return ArrayOfString
     */
    public function getGetSchemaDataSourceIDsResult()
    {
        return $this->GetSchemaDataSourceIDsResult;
    }

    /**
     * @param ArrayOfString $GetSchemaDataSourceIDsResult
     * @return GetSchemaDataSourceIDsResponse
     */
    public function setGetSchemaDataSourceIDsResult($GetSchemaDataSourceIDsResult)
    {
        $this->GetSchemaDataSourceIDsResult = $GetSchemaDataSourceIDsResult;
        return $this;
    }

}

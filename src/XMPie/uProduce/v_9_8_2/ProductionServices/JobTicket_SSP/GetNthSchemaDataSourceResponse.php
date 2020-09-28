<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetNthSchemaDataSourceResponse
{

    /**
     * @var Connection $GetNthSchemaDataSourceResult
     */
    protected $GetNthSchemaDataSourceResult = null;

    /**
     * @param Connection $GetNthSchemaDataSourceResult
     */
    public function __construct($GetNthSchemaDataSourceResult = null)
    {
        $this->GetNthSchemaDataSourceResult = $GetNthSchemaDataSourceResult;
    }

    /**
     * @return Connection
     */
    public function getGetNthSchemaDataSourceResult()
    {
        return $this->GetNthSchemaDataSourceResult;
    }

    /**
     * @param Connection $GetNthSchemaDataSourceResult
     * @return GetNthSchemaDataSourceResponse
     */
    public function setGetNthSchemaDataSourceResult($GetNthSchemaDataSourceResult)
    {
        $this->GetNthSchemaDataSourceResult = $GetNthSchemaDataSourceResult;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\ProductionServices\JobTicket_SSP;

class GetSchemaDataSourceIDResponse
{

    /**
     * @var string $GetSchemaDataSourceIDResult
     */
    protected $GetSchemaDataSourceIDResult = null;

    /**
     * @param string $GetSchemaDataSourceIDResult
     */
    public function __construct($GetSchemaDataSourceIDResult = null)
    {
      $this->GetSchemaDataSourceIDResult = $GetSchemaDataSourceIDResult;
    }

    /**
     * @return string
     */
    public function getGetSchemaDataSourceIDResult()
    {
      return $this->GetSchemaDataSourceIDResult;
    }

    /**
     * @param string $GetSchemaDataSourceIDResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\ProductionServices\JobTicket_SSP\GetSchemaDataSourceIDResponse
     */
    public function setGetSchemaDataSourceIDResult($GetSchemaDataSourceIDResult)
    {
      $this->GetSchemaDataSourceIDResult = $GetSchemaDataSourceIDResult;
      return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetNthRIDataSourceResponse
{

    /**
     * @var Connection $GetNthRIDataSourceResult
     */
    protected $GetNthRIDataSourceResult = null;

    /**
     * @param Connection $GetNthRIDataSourceResult
     */
    public function __construct($GetNthRIDataSourceResult = null)
    {
        $this->GetNthRIDataSourceResult = $GetNthRIDataSourceResult;
    }

    /**
     * @return Connection
     */
    public function getGetNthRIDataSourceResult()
    {
        return $this->GetNthRIDataSourceResult;
    }

    /**
     * @param Connection $GetNthRIDataSourceResult
     * @return GetNthRIDataSourceResponse
     */
    public function setGetNthRIDataSourceResult($GetNthRIDataSourceResult)
    {
        $this->GetNthRIDataSourceResult = $GetNthRIDataSourceResult;
        return $this;
    }

}

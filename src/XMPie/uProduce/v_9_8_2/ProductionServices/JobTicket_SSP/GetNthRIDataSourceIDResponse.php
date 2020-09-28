<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetNthRIDataSourceIDResponse
{

    /**
     * @var string $GetNthRIDataSourceIDResult
     */
    protected $GetNthRIDataSourceIDResult = null;

    /**
     * @param string $GetNthRIDataSourceIDResult
     */
    public function __construct($GetNthRIDataSourceIDResult = null)
    {
        $this->GetNthRIDataSourceIDResult = $GetNthRIDataSourceIDResult;
    }

    /**
     * @return string
     */
    public function getGetNthRIDataSourceIDResult()
    {
        return $this->GetNthRIDataSourceIDResult;
    }

    /**
     * @param string $GetNthRIDataSourceIDResult
     * @return GetNthRIDataSourceIDResponse
     */
    public function setGetNthRIDataSourceIDResult($GetNthRIDataSourceIDResult)
    {
        $this->GetNthRIDataSourceIDResult = $GetNthRIDataSourceIDResult;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetDataSourcesByIDResponse
{

    /**
     * @var boolean $SetDataSourcesByIDResult
     */
    protected $SetDataSourcesByIDResult = null;

    /**
     * @param boolean $SetDataSourcesByIDResult
     */
    public function __construct($SetDataSourcesByIDResult = null)
    {
        $this->SetDataSourcesByIDResult = $SetDataSourcesByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetDataSourcesByIDResult()
    {
        return $this->SetDataSourcesByIDResult;
    }

    /**
     * @param boolean $SetDataSourcesByIDResult
     * @return SetDataSourcesByIDResponse
     */
    public function setSetDataSourcesByIDResult($SetDataSourcesByIDResult)
    {
        $this->SetDataSourcesByIDResult = $SetDataSourcesByIDResult;
        return $this;
    }

}

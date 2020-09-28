<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetDataSourceByIDResponse
{

    /**
     * @var boolean $SetDataSourceByIDResult
     */
    protected $SetDataSourceByIDResult = null;

    /**
     * @param boolean $SetDataSourceByIDResult
     */
    public function __construct($SetDataSourceByIDResult = null)
    {
        $this->SetDataSourceByIDResult = $SetDataSourceByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetDataSourceByIDResult()
    {
        return $this->SetDataSourceByIDResult;
    }

    /**
     * @param boolean $SetDataSourceByIDResult
     * @return SetDataSourceByIDResponse
     */
    public function setSetDataSourceByIDResult($SetDataSourceByIDResult)
    {
        $this->SetDataSourceByIDResult = $SetDataSourceByIDResult;
        return $this;
    }

}

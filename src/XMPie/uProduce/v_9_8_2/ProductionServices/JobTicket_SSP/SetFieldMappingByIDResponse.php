<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetFieldMappingByIDResponse
{

    /**
     * @var boolean $SetFieldMappingByIDResult
     */
    protected $SetFieldMappingByIDResult = null;

    /**
     * @param boolean $SetFieldMappingByIDResult
     */
    public function __construct($SetFieldMappingByIDResult = null)
    {
        $this->SetFieldMappingByIDResult = $SetFieldMappingByIDResult;
    }

    /**
     * @return boolean
     */
    public function getSetFieldMappingByIDResult()
    {
        return $this->SetFieldMappingByIDResult;
    }

    /**
     * @param boolean $SetFieldMappingByIDResult
     * @return SetFieldMappingByIDResponse
     */
    public function setSetFieldMappingByIDResult($SetFieldMappingByIDResult)
    {
        $this->SetFieldMappingByIDResult = $SetFieldMappingByIDResult;
        return $this;
    }

}

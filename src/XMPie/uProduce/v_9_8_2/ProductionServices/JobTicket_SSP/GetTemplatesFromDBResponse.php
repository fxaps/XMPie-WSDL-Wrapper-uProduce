<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetTemplatesFromDBResponse
{

    /**
     * @var GetTemplatesFromDBResult $GetTemplatesFromDBResult
     */
    protected $GetTemplatesFromDBResult = null;

    /**
     * @param GetTemplatesFromDBResult $GetTemplatesFromDBResult
     */
    public function __construct($GetTemplatesFromDBResult = null)
    {
        $this->GetTemplatesFromDBResult = $GetTemplatesFromDBResult;
    }

    /**
     * @return GetTemplatesFromDBResult
     */
    public function getGetTemplatesFromDBResult()
    {
        return $this->GetTemplatesFromDBResult;
    }

    /**
     * @param GetTemplatesFromDBResult $GetTemplatesFromDBResult
     * @return GetTemplatesFromDBResponse
     */
    public function setGetTemplatesFromDBResult($GetTemplatesFromDBResult)
    {
        $this->GetTemplatesFromDBResult = $GetTemplatesFromDBResult;
        return $this;
    }

}

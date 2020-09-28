<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP;

class GetStatusResponse
{

    /**
     * @var StatusStructure $GetStatusResult
     */
    protected $GetStatusResult = null;

    /**
     * @param StatusStructure $GetStatusResult
     */
    public function __construct($GetStatusResult = null)
    {
        $this->GetStatusResult = $GetStatusResult;
    }

    /**
     * @return StatusStructure
     */
    public function getGetStatusResult()
    {
        return $this->GetStatusResult;
    }

    /**
     * @param StatusStructure $GetStatusResult
     * @return GetStatusResponse
     */
    public function setGetStatusResult($GetStatusResult)
    {
        $this->GetStatusResult = $GetStatusResult;
        return $this;
    }

}

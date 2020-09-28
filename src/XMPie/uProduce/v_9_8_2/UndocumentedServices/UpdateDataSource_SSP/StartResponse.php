<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP;

class StartResponse
{

    /**
     * @var StatusStructure $StartResult
     */
    protected $StartResult = null;

    /**
     * @param StatusStructure $StartResult
     */
    public function __construct($StartResult = null)
    {
        $this->StartResult = $StartResult;
    }

    /**
     * @return StatusStructure
     */
    public function getStartResult()
    {
        return $this->StartResult;
    }

    /**
     * @param StatusStructure $StartResult
     * @return StartResponse
     */
    public function setStartResult($StartResult)
    {
        $this->StartResult = $StartResult;
        return $this;
    }

}

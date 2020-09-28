<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Production_SSP;

class AppendCSVXFileResponse
{

    /**
     * @var boolean $AppendCSVXFileResult
     */
    protected $AppendCSVXFileResult = null;

    /**
     * @param boolean $AppendCSVXFileResult
     */
    public function __construct($AppendCSVXFileResult = null)
    {
        $this->AppendCSVXFileResult = $AppendCSVXFileResult;
    }

    /**
     * @return boolean
     */
    public function getAppendCSVXFileResult()
    {
        return $this->AppendCSVXFileResult;
    }

    /**
     * @param boolean $AppendCSVXFileResult
     * @return AppendCSVXFileResponse
     */
    public function setAppendCSVXFileResult($AppendCSVXFileResult)
    {
        $this->AppendCSVXFileResult = $AppendCSVXFileResult;
        return $this;
    }

}

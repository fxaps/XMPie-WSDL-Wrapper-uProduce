<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSource_SSP;

class ConvertToPrimaryTableResponse
{

    /**
     * @var Report $ConvertToPrimaryTableResult
     */
    protected $ConvertToPrimaryTableResult = null;

    /**
     * @param Report $ConvertToPrimaryTableResult
     */
    public function __construct($ConvertToPrimaryTableResult = null)
    {
        $this->ConvertToPrimaryTableResult = $ConvertToPrimaryTableResult;
    }

    /**
     * @return Report
     */
    public function getConvertToPrimaryTableResult()
    {
        return $this->ConvertToPrimaryTableResult;
    }

    /**
     * @param Report $ConvertToPrimaryTableResult
     * @return ConvertToPrimaryTableResponse
     */
    public function setConvertToPrimaryTableResult($ConvertToPrimaryTableResult)
    {
        $this->ConvertToPrimaryTableResult = $ConvertToPrimaryTableResult;
        return $this;
    }

}

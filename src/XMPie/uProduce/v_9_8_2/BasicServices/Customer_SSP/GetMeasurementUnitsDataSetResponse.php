<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class GetMeasurementUnitsDataSetResponse
{

    /**
     * @var GetMeasurementUnitsDataSetResult $GetMeasurementUnitsDataSetResult
     */
    protected $GetMeasurementUnitsDataSetResult = null;

    /**
     * @param GetMeasurementUnitsDataSetResult $GetMeasurementUnitsDataSetResult
     */
    public function __construct($GetMeasurementUnitsDataSetResult = null)
    {
        $this->GetMeasurementUnitsDataSetResult = $GetMeasurementUnitsDataSetResult;
    }

    /**
     * @return GetMeasurementUnitsDataSetResult
     */
    public function getGetMeasurementUnitsDataSetResult()
    {
        return $this->GetMeasurementUnitsDataSetResult;
    }

    /**
     * @param GetMeasurementUnitsDataSetResult $GetMeasurementUnitsDataSetResult
     * @return GetMeasurementUnitsDataSetResponse
     */
    public function setGetMeasurementUnitsDataSetResult($GetMeasurementUnitsDataSetResult)
    {
        $this->GetMeasurementUnitsDataSetResult = $GetMeasurementUnitsDataSetResult;
        return $this;
    }

}

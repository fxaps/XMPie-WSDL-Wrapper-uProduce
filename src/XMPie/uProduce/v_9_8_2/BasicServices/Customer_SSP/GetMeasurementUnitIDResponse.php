<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class GetMeasurementUnitIDResponse
{

    /**
     * @var string $GetMeasurementUnitIDResult
     */
    protected $GetMeasurementUnitIDResult = null;

    /**
     * @param string $GetMeasurementUnitIDResult
     */
    public function __construct($GetMeasurementUnitIDResult = null)
    {
        $this->GetMeasurementUnitIDResult = $GetMeasurementUnitIDResult;
    }

    /**
     * @return string
     */
    public function getGetMeasurementUnitIDResult()
    {
        return $this->GetMeasurementUnitIDResult;
    }

    /**
     * @param string $GetMeasurementUnitIDResult
     * @return GetMeasurementUnitIDResponse
     */
    public function setGetMeasurementUnitIDResult($GetMeasurementUnitIDResult)
    {
        $this->GetMeasurementUnitIDResult = $GetMeasurementUnitIDResult;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\Customer_SSP;

class DeleteMeasurementUnitsResponse
{

    /**
     * @var boolean $DeleteMeasurementUnitsResult
     */
    protected $DeleteMeasurementUnitsResult = null;

    /**
     * @param boolean $DeleteMeasurementUnitsResult
     */
    public function __construct($DeleteMeasurementUnitsResult = null)
    {
      $this->DeleteMeasurementUnitsResult = $DeleteMeasurementUnitsResult;
    }

    /**
     * @return boolean
     */
    public function getDeleteMeasurementUnitsResult()
    {
      return $this->DeleteMeasurementUnitsResult;
    }

    /**
     * @param boolean $DeleteMeasurementUnitsResult
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\BasicServices\Customer_SSP\DeleteMeasurementUnitsResponse
     */
    public function setDeleteMeasurementUnitsResult($DeleteMeasurementUnitsResult)
    {
      $this->DeleteMeasurementUnitsResult = $DeleteMeasurementUnitsResult;
      return $this;
    }

}

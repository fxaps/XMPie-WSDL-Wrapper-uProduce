<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\MeasurementUnit_SSP;

class Delete
{

    /**
     * @var string $inUsername
     */
    protected $inUsername = null;

    /**
     * @var string $inPassword
     */
    protected $inPassword = null;

    /**
     * @var string $inMeasurementUnitID
     */
    protected $inMeasurementUnitID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inMeasurementUnitID
     */
    public function __construct($inUsername = null, $inPassword = null, $inMeasurementUnitID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inMeasurementUnitID = $inMeasurementUnitID;
    }

    /**
     * @return string
     */
    public function getInUsername()
    {
      return $this->inUsername;
    }

    /**
     * @param string $inUsername
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\MeasurementUnit_SSP\Delete
     */
    public function setInUsername($inUsername)
    {
      $this->inUsername = $inUsername;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPassword()
    {
      return $this->inPassword;
    }

    /**
     * @param string $inPassword
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\MeasurementUnit_SSP\Delete
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMeasurementUnitID()
    {
      return $this->inMeasurementUnitID;
    }

    /**
     * @param string $inMeasurementUnitID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\MeasurementUnit_SSP\Delete
     */
    public function setInMeasurementUnitID($inMeasurementUnitID)
    {
      $this->inMeasurementUnitID = $inMeasurementUnitID;
      return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\MeasurementUnit_SSP;

class GetID
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
     * @var string $inMeasurementUnitName
     */
    protected $inMeasurementUnitName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inMeasurementUnitName
     */
    public function __construct($inUsername = null, $inPassword = null, $inMeasurementUnitName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inMeasurementUnitName = $inMeasurementUnitName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\MeasurementUnit_SSP\GetID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\MeasurementUnit_SSP\GetID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMeasurementUnitName()
    {
      return $this->inMeasurementUnitName;
    }

    /**
     * @param string $inMeasurementUnitName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\MeasurementUnit_SSP\GetID
     */
    public function setInMeasurementUnitName($inMeasurementUnitName)
    {
      $this->inMeasurementUnitName = $inMeasurementUnitName;
      return $this;
    }

}

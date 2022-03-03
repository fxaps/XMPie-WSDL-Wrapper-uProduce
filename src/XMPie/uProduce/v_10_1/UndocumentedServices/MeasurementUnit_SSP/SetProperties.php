<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\MeasurementUnit_SSP;

class SetProperties
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
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inMeasurementUnitID
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inMeasurementUnitID = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inMeasurementUnitID = $inMeasurementUnitID;
      $this->inProps = $inProps;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\MeasurementUnit_SSP\SetProperties
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\MeasurementUnit_SSP\SetProperties
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\MeasurementUnit_SSP\SetProperties
     */
    public function setInMeasurementUnitID($inMeasurementUnitID)
    {
      $this->inMeasurementUnitID = $inMeasurementUnitID;
      return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProps()
    {
      return $this->inProps;
    }

    /**
     * @param ArrayOfProperty $inProps
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\MeasurementUnit_SSP\SetProperties
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}

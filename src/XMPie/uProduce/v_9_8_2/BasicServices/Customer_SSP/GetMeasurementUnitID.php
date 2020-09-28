<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class GetMeasurementUnitID
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
     * @return GetMeasurementUnitID
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
     * @return GetMeasurementUnitID
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
     * @return GetMeasurementUnitID
     */
    public function setInMeasurementUnitName($inMeasurementUnitName)
    {
        $this->inMeasurementUnitName = $inMeasurementUnitName;
        return $this;
    }

}

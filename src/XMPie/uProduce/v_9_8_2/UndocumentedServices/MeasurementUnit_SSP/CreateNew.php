<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\MeasurementUnit_SSP;

class CreateNew
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
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var string $inPluralFormName
     */
    protected $inPluralFormName = null;

    /**
     * @var string $inAbbreviation
     */
    protected $inAbbreviation = null;

    /**
     * @var float $inConversionNumerator
     */
    protected $inConversionNumerator = null;

    /**
     * @var float $inConversionDenominator
     */
    protected $inConversionDenominator = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inName
     * @param string $inPluralFormName
     * @param string $inAbbreviation
     * @param float $inConversionNumerator
     * @param float $inConversionDenominator
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inName = null, $inPluralFormName = null, $inAbbreviation = null, $inConversionNumerator = null, $inConversionDenominator = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inName = $inName;
        $this->inPluralFormName = $inPluralFormName;
        $this->inAbbreviation = $inAbbreviation;
        $this->inConversionNumerator = $inConversionNumerator;
        $this->inConversionDenominator = $inConversionDenominator;
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
     * @return CreateNew
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
     * @return CreateNew
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInName()
    {
        return $this->inName;
    }

    /**
     * @param string $inName
     * @return CreateNew
     */
    public function setInName($inName)
    {
        $this->inName = $inName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPluralFormName()
    {
        return $this->inPluralFormName;
    }

    /**
     * @param string $inPluralFormName
     * @return CreateNew
     */
    public function setInPluralFormName($inPluralFormName)
    {
        $this->inPluralFormName = $inPluralFormName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInAbbreviation()
    {
        return $this->inAbbreviation;
    }

    /**
     * @param string $inAbbreviation
     * @return CreateNew
     */
    public function setInAbbreviation($inAbbreviation)
    {
        $this->inAbbreviation = $inAbbreviation;
        return $this;
    }

    /**
     * @return float
     */
    public function getInConversionNumerator()
    {
        return $this->inConversionNumerator;
    }

    /**
     * @param float $inConversionNumerator
     * @return CreateNew
     */
    public function setInConversionNumerator($inConversionNumerator)
    {
        $this->inConversionNumerator = $inConversionNumerator;
        return $this;
    }

    /**
     * @return float
     */
    public function getInConversionDenominator()
    {
        return $this->inConversionDenominator;
    }

    /**
     * @param float $inConversionDenominator
     * @return CreateNew
     */
    public function setInConversionDenominator($inConversionDenominator)
    {
        $this->inConversionDenominator = $inConversionDenominator;
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
     * @return CreateNew
     */
    public function setInProps($inProps)
    {
        $this->inProps = $inProps;
        return $this;
    }

}

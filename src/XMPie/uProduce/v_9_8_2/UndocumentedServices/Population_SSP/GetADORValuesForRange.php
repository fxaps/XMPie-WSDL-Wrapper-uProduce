<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP;

class GetADORValuesForRange
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
     * @var string $inPopulationOrContextId
     */
    protected $inPopulationOrContextId = null;

    /**
     * @var ArrayOfString $inADORNames
     */
    protected $inADORNames = null;

    /**
     * @var int $inFrom
     */
    protected $inFrom = null;

    /**
     * @var int $inTo
     */
    protected $inTo = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPopulationOrContextId
     * @param ArrayOfString $inADORNames
     * @param int $inFrom
     * @param int $inTo
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inPopulationOrContextId = null, $inADORNames = null, $inFrom = null, $inTo = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inPopulationOrContextId = $inPopulationOrContextId;
        $this->inADORNames = $inADORNames;
        $this->inFrom = $inFrom;
        $this->inTo = $inTo;
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
     * @return GetADORValuesForRange
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
     * @return GetADORValuesForRange
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPopulationOrContextId()
    {
        return $this->inPopulationOrContextId;
    }

    /**
     * @param string $inPopulationOrContextId
     * @return GetADORValuesForRange
     */
    public function setInPopulationOrContextId($inPopulationOrContextId)
    {
        $this->inPopulationOrContextId = $inPopulationOrContextId;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInADORNames()
    {
        return $this->inADORNames;
    }

    /**
     * @param ArrayOfString $inADORNames
     * @return GetADORValuesForRange
     */
    public function setInADORNames($inADORNames)
    {
        $this->inADORNames = $inADORNames;
        return $this;
    }

    /**
     * @return int
     */
    public function getInFrom()
    {
        return $this->inFrom;
    }

    /**
     * @param int $inFrom
     * @return GetADORValuesForRange
     */
    public function setInFrom($inFrom)
    {
        $this->inFrom = $inFrom;
        return $this;
    }

    /**
     * @return int
     */
    public function getInTo()
    {
        return $this->inTo;
    }

    /**
     * @param int $inTo
     * @return GetADORValuesForRange
     */
    public function setInTo($inTo)
    {
        $this->inTo = $inTo;
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
     * @return GetADORValuesForRange
     */
    public function setInProps($inProps)
    {
        $this->inProps = $inProps;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\Population_SSP;

class GetADORValuesDataSet
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
     * @var ArrayOfString $inRecipientIDs
     */
    protected $inRecipientIDs = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPopulationOrContextId
     * @param ArrayOfString $inADORNames
     * @param ArrayOfString $inRecipientIDs
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inPopulationOrContextId = null, $inADORNames = null, $inRecipientIDs = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inPopulationOrContextId = $inPopulationOrContextId;
        $this->inADORNames = $inADORNames;
        $this->inRecipientIDs = $inRecipientIDs;
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
     * @return GetADORValuesDataSet
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
     * @return GetADORValuesDataSet
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
     * @return GetADORValuesDataSet
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
     * @return GetADORValuesDataSet
     */
    public function setInADORNames($inADORNames)
    {
        $this->inADORNames = $inADORNames;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInRecipientIDs()
    {
        return $this->inRecipientIDs;
    }

    /**
     * @param ArrayOfString $inRecipientIDs
     * @return GetADORValuesDataSet
     */
    public function setInRecipientIDs($inRecipientIDs)
    {
        $this->inRecipientIDs = $inRecipientIDs;
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
     * @return GetADORValuesDataSet
     */
    public function setInProps($inProps)
    {
        $this->inProps = $inProps;
        return $this;
    }

}

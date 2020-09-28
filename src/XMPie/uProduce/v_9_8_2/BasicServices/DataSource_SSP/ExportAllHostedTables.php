<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSource_SSP;

class ExportAllHostedTables
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
     * @var string $inDataSourceID
     */
    protected $inDataSourceID = null;

    /**
     * @var boolean $inExcludeNonPrimaryTables
     */
    protected $inExcludeNonPrimaryTables = null;

    /**
     * @var string $inDestination
     */
    protected $inDestination = null;

    /**
     * @var string $inType
     */
    protected $inType = null;

    /**
     * @var boolean $inCompressOutput
     */
    protected $inCompressOutput = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDataSourceID
     * @param boolean $inExcludeNonPrimaryTables
     * @param string $inDestination
     * @param string $inType
     * @param boolean $inCompressOutput
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inDataSourceID = null, $inExcludeNonPrimaryTables = null, $inDestination = null, $inType = null, $inCompressOutput = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDataSourceID = $inDataSourceID;
        $this->inExcludeNonPrimaryTables = $inExcludeNonPrimaryTables;
        $this->inDestination = $inDestination;
        $this->inType = $inType;
        $this->inCompressOutput = $inCompressOutput;
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
     * @return ExportAllHostedTables
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
     * @return ExportAllHostedTables
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDataSourceID()
    {
        return $this->inDataSourceID;
    }

    /**
     * @param string $inDataSourceID
     * @return ExportAllHostedTables
     */
    public function setInDataSourceID($inDataSourceID)
    {
        $this->inDataSourceID = $inDataSourceID;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInExcludeNonPrimaryTables()
    {
        return $this->inExcludeNonPrimaryTables;
    }

    /**
     * @param boolean $inExcludeNonPrimaryTables
     * @return ExportAllHostedTables
     */
    public function setInExcludeNonPrimaryTables($inExcludeNonPrimaryTables)
    {
        $this->inExcludeNonPrimaryTables = $inExcludeNonPrimaryTables;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDestination()
    {
        return $this->inDestination;
    }

    /**
     * @param string $inDestination
     * @return ExportAllHostedTables
     */
    public function setInDestination($inDestination)
    {
        $this->inDestination = $inDestination;
        return $this;
    }

    /**
     * @return string
     */
    public function getInType()
    {
        return $this->inType;
    }

    /**
     * @param string $inType
     * @return ExportAllHostedTables
     */
    public function setInType($inType)
    {
        $this->inType = $inType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInCompressOutput()
    {
        return $this->inCompressOutput;
    }

    /**
     * @param boolean $inCompressOutput
     * @return ExportAllHostedTables
     */
    public function setInCompressOutput($inCompressOutput)
    {
        $this->inCompressOutput = $inCompressOutput;
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
     * @return ExportAllHostedTables
     */
    public function setInProps($inProps)
    {
        $this->inProps = $inProps;
        return $this;
    }

}

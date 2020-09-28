<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Job_SSP;

class AddFileToOutputResults
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
     * @var string $inJobID
     */
    protected $inJobID = null;

    /**
     * @var string $inFilePath
     */
    protected $inFilePath = null;

    /**
     * @var boolean $inDeleteSource
     */
    protected $inDeleteSource = null;

    /**
     * @var boolean $inDeleteEmptySourceFolder
     */
    protected $inDeleteEmptySourceFolder = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobID
     * @param string $inFilePath
     * @param boolean $inDeleteSource
     * @param boolean $inDeleteEmptySourceFolder
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobID = null, $inFilePath = null, $inDeleteSource = null, $inDeleteEmptySourceFolder = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inJobID = $inJobID;
        $this->inFilePath = $inFilePath;
        $this->inDeleteSource = $inDeleteSource;
        $this->inDeleteEmptySourceFolder = $inDeleteEmptySourceFolder;
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
     * @return AddFileToOutputResults
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
     * @return AddFileToOutputResults
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInJobID()
    {
        return $this->inJobID;
    }

    /**
     * @param string $inJobID
     * @return AddFileToOutputResults
     */
    public function setInJobID($inJobID)
    {
        $this->inJobID = $inJobID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInFilePath()
    {
        return $this->inFilePath;
    }

    /**
     * @param string $inFilePath
     * @return AddFileToOutputResults
     */
    public function setInFilePath($inFilePath)
    {
        $this->inFilePath = $inFilePath;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInDeleteSource()
    {
        return $this->inDeleteSource;
    }

    /**
     * @param boolean $inDeleteSource
     * @return AddFileToOutputResults
     */
    public function setInDeleteSource($inDeleteSource)
    {
        $this->inDeleteSource = $inDeleteSource;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInDeleteEmptySourceFolder()
    {
        return $this->inDeleteEmptySourceFolder;
    }

    /**
     * @param boolean $inDeleteEmptySourceFolder
     * @return AddFileToOutputResults
     */
    public function setInDeleteEmptySourceFolder($inDeleteEmptySourceFolder)
    {
        $this->inDeleteEmptySourceFolder = $inDeleteEmptySourceFolder;
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
     * @return AddFileToOutputResults
     */
    public function setInProps($inProps)
    {
        $this->inProps = $inProps;
        return $this;
    }

}

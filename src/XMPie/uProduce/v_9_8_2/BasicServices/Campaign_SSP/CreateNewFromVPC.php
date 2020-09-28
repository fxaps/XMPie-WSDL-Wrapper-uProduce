<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Campaign_SSP;

class CreateNewFromVPC
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
     * @var string $inAccountID
     */
    protected $inAccountID = null;

    /**
     * @var string $inVPCPath
     */
    protected $inVPCPath = null;

    /**
     * @var string $inName
     */
    protected $inName = null;

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
     * @param string $inAccountID
     * @param string $inVPCPath
     * @param string $inName
     * @param boolean $inDeleteSource
     * @param boolean $inDeleteEmptySourceFolder
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountID = null, $inVPCPath = null, $inName = null, $inDeleteSource = null, $inDeleteEmptySourceFolder = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inAccountID = $inAccountID;
        $this->inVPCPath = $inVPCPath;
        $this->inName = $inName;
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
     * @return CreateNewFromVPC
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
     * @return CreateNewFromVPC
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInAccountID()
    {
        return $this->inAccountID;
    }

    /**
     * @param string $inAccountID
     * @return CreateNewFromVPC
     */
    public function setInAccountID($inAccountID)
    {
        $this->inAccountID = $inAccountID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInVPCPath()
    {
        return $this->inVPCPath;
    }

    /**
     * @param string $inVPCPath
     * @return CreateNewFromVPC
     */
    public function setInVPCPath($inVPCPath)
    {
        $this->inVPCPath = $inVPCPath;
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
     * @return CreateNewFromVPC
     */
    public function setInName($inName)
    {
        $this->inName = $inName;
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
     * @return CreateNewFromVPC
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
     * @return CreateNewFromVPC
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
     * @return CreateNewFromVPC
     */
    public function setInProps($inProps)
    {
        $this->inProps = $inProps;
        return $this;
    }

}

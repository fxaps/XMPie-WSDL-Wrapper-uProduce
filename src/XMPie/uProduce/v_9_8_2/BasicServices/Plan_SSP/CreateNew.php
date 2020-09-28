<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Plan_SSP;

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
     * @var string $inCampaignID
     */
    protected $inCampaignID = null;

    /**
     * @var string $inPath
     */
    protected $inPath = null;

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
     * @param string $inCampaignID
     * @param string $inPath
     * @param boolean $inDeleteSource
     * @param boolean $inDeleteEmptySourceFolder
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inCampaignID = null, $inPath = null, $inDeleteSource = null, $inDeleteEmptySourceFolder = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inCampaignID = $inCampaignID;
        $this->inPath = $inPath;
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
    public function getInCampaignID()
    {
        return $this->inCampaignID;
    }

    /**
     * @param string $inCampaignID
     * @return CreateNew
     */
    public function setInCampaignID($inCampaignID)
    {
        $this->inCampaignID = $inCampaignID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPath()
    {
        return $this->inPath;
    }

    /**
     * @param string $inPath
     * @return CreateNew
     */
    public function setInPath($inPath)
    {
        $this->inPath = $inPath;
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
     * @return CreateNew
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
     * @return CreateNew
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
     * @return CreateNew
     */
    public function setInProps($inProps)
    {
        $this->inProps = $inProps;
        return $this;
    }

}

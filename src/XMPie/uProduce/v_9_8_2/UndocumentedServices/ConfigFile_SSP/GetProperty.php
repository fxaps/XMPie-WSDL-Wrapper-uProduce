<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\ConfigFile_SSP;

class GetProperty
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
     * @var string $inConfigFileID
     */
    protected $inConfigFileID = null;

    /**
     * @var string $inPropertyName
     */
    protected $inPropertyName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inConfigFileID
     * @param string $inPropertyName
     */
    public function __construct($inUsername = null, $inPassword = null, $inConfigFileID = null, $inPropertyName = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inConfigFileID = $inConfigFileID;
        $this->inPropertyName = $inPropertyName;
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
     * @return GetProperty
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
     * @return GetProperty
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInConfigFileID()
    {
        return $this->inConfigFileID;
    }

    /**
     * @param string $inConfigFileID
     * @return GetProperty
     */
    public function setInConfigFileID($inConfigFileID)
    {
        $this->inConfigFileID = $inConfigFileID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPropertyName()
    {
        return $this->inPropertyName;
    }

    /**
     * @param string $inPropertyName
     * @return GetProperty
     */
    public function setInPropertyName($inPropertyName)
    {
        $this->inPropertyName = $inPropertyName;
        return $this;
    }

}

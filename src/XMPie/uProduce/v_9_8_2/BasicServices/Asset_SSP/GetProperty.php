<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Asset_SSP;

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
     * @var string $inAssetID
     */
    protected $inAssetID = null;

    /**
     * @var string $inPropertyName
     */
    protected $inPropertyName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetID
     * @param string $inPropertyName
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetID = null, $inPropertyName = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inAssetID = $inAssetID;
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
    public function getInAssetID()
    {
        return $this->inAssetID;
    }

    /**
     * @param string $inAssetID
     * @return GetProperty
     */
    public function setInAssetID($inAssetID)
    {
        $this->inAssetID = $inAssetID;
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

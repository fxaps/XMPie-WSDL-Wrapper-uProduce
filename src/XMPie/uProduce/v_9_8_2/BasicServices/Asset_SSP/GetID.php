<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Asset_SSP;

class GetID
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
     * @var string $inAssetSourceID
     */
    protected $inAssetSourceID = null;

    /**
     * @var string $inAssetFileName
     */
    protected $inAssetFileName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetSourceID
     * @param string $inAssetFileName
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceID = null, $inAssetFileName = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inAssetSourceID = $inAssetSourceID;
        $this->inAssetFileName = $inAssetFileName;
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
     * @return GetID
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
     * @return GetID
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInAssetSourceID()
    {
        return $this->inAssetSourceID;
    }

    /**
     * @param string $inAssetSourceID
     * @return GetID
     */
    public function setInAssetSourceID($inAssetSourceID)
    {
        $this->inAssetSourceID = $inAssetSourceID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInAssetFileName()
    {
        return $this->inAssetFileName;
    }

    /**
     * @param string $inAssetFileName
     * @return GetID
     */
    public function setInAssetFileName($inAssetFileName)
    {
        $this->inAssetFileName = $inAssetFileName;
        return $this;
    }

}

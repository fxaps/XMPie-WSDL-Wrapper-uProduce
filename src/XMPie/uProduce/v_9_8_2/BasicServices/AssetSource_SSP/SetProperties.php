<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\AssetSource_SSP;

class SetProperties
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
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetSourceID
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceID = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inAssetSourceID = $inAssetSourceID;
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
     * @return SetProperties
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
     * @return SetProperties
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
     * @return SetProperties
     */
    public function setInAssetSourceID($inAssetSourceID)
    {
        $this->inAssetSourceID = $inAssetSourceID;
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
     * @return SetProperties
     */
    public function setInProps($inProps)
    {
        $this->inProps = $inProps;
        return $this;
    }

}

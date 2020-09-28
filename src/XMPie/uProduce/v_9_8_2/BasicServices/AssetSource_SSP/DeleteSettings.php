<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\AssetSource_SSP;

class DeleteSettings
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
     * @var ArrayOfString $inSettingsNames
     */
    protected $inSettingsNames = null;

    /**
     * @var boolean $inSharedForAllUsers
     */
    protected $inSharedForAllUsers = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAssetSourceID
     * @param ArrayOfString $inSettingsNames
     * @param boolean $inSharedForAllUsers
     */
    public function __construct($inUsername = null, $inPassword = null, $inAssetSourceID = null, $inSettingsNames = null, $inSharedForAllUsers = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inAssetSourceID = $inAssetSourceID;
        $this->inSettingsNames = $inSettingsNames;
        $this->inSharedForAllUsers = $inSharedForAllUsers;
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
     * @return DeleteSettings
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
     * @return DeleteSettings
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
     * @return DeleteSettings
     */
    public function setInAssetSourceID($inAssetSourceID)
    {
        $this->inAssetSourceID = $inAssetSourceID;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInSettingsNames()
    {
        return $this->inSettingsNames;
    }

    /**
     * @param ArrayOfString $inSettingsNames
     * @return DeleteSettings
     */
    public function setInSettingsNames($inSettingsNames)
    {
        $this->inSettingsNames = $inSettingsNames;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInSharedForAllUsers()
    {
        return $this->inSharedForAllUsers;
    }

    /**
     * @param boolean $inSharedForAllUsers
     * @return DeleteSettings
     */
    public function setInSharedForAllUsers($inSharedForAllUsers)
    {
        $this->inSharedForAllUsers = $inSharedForAllUsers;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\InteractiveCampaign_SSP;

class DeleteSettingsByID
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
     * @var string $inPortID
     */
    protected $inPortID = null;

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
     * @param string $inPortID
     * @param ArrayOfString $inSettingsNames
     * @param boolean $inSharedForAllUsers
     */
    public function __construct($inUsername = null, $inPassword = null, $inPortID = null, $inSettingsNames = null, $inSharedForAllUsers = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inPortID = $inPortID;
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
     * @return DeleteSettingsByID
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
     * @return DeleteSettingsByID
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPortID()
    {
        return $this->inPortID;
    }

    /**
     * @param string $inPortID
     * @return DeleteSettingsByID
     */
    public function setInPortID($inPortID)
    {
        $this->inPortID = $inPortID;
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
     * @return DeleteSettingsByID
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
     * @return DeleteSettingsByID
     */
    public function setInSharedForAllUsers($inSharedForAllUsers)
    {
        $this->inSharedForAllUsers = $inSharedForAllUsers;
        return $this;
    }

}

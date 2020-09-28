<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\InteractiveCampaign_SSP;

class SetSettingsByID
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
     * @var ArrayOfSetting $inSettings
     */
    protected $inSettings = null;

    /**
     * @var boolean $inSharedForAllUsers
     */
    protected $inSharedForAllUsers = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPortID
     * @param ArrayOfSetting $inSettings
     * @param boolean $inSharedForAllUsers
     */
    public function __construct($inUsername = null, $inPassword = null, $inPortID = null, $inSettings = null, $inSharedForAllUsers = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inPortID = $inPortID;
        $this->inSettings = $inSettings;
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
     * @return SetSettingsByID
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
     * @return SetSettingsByID
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
     * @return SetSettingsByID
     */
    public function setInPortID($inPortID)
    {
        $this->inPortID = $inPortID;
        return $this;
    }

    /**
     * @return ArrayOfSetting
     */
    public function getInSettings()
    {
        return $this->inSettings;
    }

    /**
     * @param ArrayOfSetting $inSettings
     * @return SetSettingsByID
     */
    public function setInSettings($inSettings)
    {
        $this->inSettings = $inSettings;
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
     * @return SetSettingsByID
     */
    public function setInSharedForAllUsers($inSharedForAllUsers)
    {
        $this->inSharedForAllUsers = $inSharedForAllUsers;
        return $this;
    }

}

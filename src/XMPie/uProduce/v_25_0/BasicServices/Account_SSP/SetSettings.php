<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Account_SSP;

class SetSettings
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
     * @param string $inAccountID
     * @param ArrayOfSetting $inSettings
     * @param boolean $inSharedForAllUsers
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountID = null, $inSettings = null, $inSharedForAllUsers = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountID = $inAccountID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Account_SSP\SetSettings
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Account_SSP\SetSettings
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Account_SSP\SetSettings
     */
    public function setInAccountID($inAccountID)
    {
      $this->inAccountID = $inAccountID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Account_SSP\SetSettings
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\BasicServices\Account_SSP\SetSettings
     */
    public function setInSharedForAllUsers($inSharedForAllUsers)
    {
      $this->inSharedForAllUsers = $inSharedForAllUsers;
      return $this;
    }

}

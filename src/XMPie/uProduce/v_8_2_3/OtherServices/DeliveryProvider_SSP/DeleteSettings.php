<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\DeliveryProvider_SSP;

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
     * @var string $inDeliveryProviderID
     */
    protected $inDeliveryProviderID = null;

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
     * @param string $inDeliveryProviderID
     * @param ArrayOfString $inSettingsNames
     * @param boolean $inSharedForAllUsers
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderID = null, $inSettingsNames = null, $inSharedForAllUsers = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDeliveryProviderID = $inDeliveryProviderID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\DeliveryProvider_SSP\DeleteSettings
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\DeliveryProvider_SSP\DeleteSettings
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDeliveryProviderID()
    {
      return $this->inDeliveryProviderID;
    }

    /**
     * @param string $inDeliveryProviderID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\DeliveryProvider_SSP\DeleteSettings
     */
    public function setInDeliveryProviderID($inDeliveryProviderID)
    {
      $this->inDeliveryProviderID = $inDeliveryProviderID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\DeliveryProvider_SSP\DeleteSettings
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\DeliveryProvider_SSP\DeleteSettings
     */
    public function setInSharedForAllUsers($inSharedForAllUsers)
    {
      $this->inSharedForAllUsers = $inSharedForAllUsers;
      return $this;
    }

}

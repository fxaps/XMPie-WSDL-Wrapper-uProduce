<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\DeliveryProvider_SSP;

class GetProperties
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
     * @var ArrayOfString $inPropertiesNames
     */
    protected $inPropertiesNames = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDeliveryProviderID
     * @param ArrayOfString $inPropertiesNames
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderID = null, $inPropertiesNames = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDeliveryProviderID = $inDeliveryProviderID;
        $this->inPropertiesNames = $inPropertiesNames;
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
     * @return GetProperties
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
     * @return GetProperties
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
     * @return GetProperties
     */
    public function setInDeliveryProviderID($inDeliveryProviderID)
    {
        $this->inDeliveryProviderID = $inDeliveryProviderID;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInPropertiesNames()
    {
        return $this->inPropertiesNames;
    }

    /**
     * @param ArrayOfString $inPropertiesNames
     * @return GetProperties
     */
    public function setInPropertiesNames($inPropertiesNames)
    {
        $this->inPropertiesNames = $inPropertiesNames;
        return $this;
    }

}

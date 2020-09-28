<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\DeliveryProvider_SSP;

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
     * @var string $inDeliveryProviderID
     */
    protected $inDeliveryProviderID = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDeliveryProviderID
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderID = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDeliveryProviderID = $inDeliveryProviderID;
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
    public function getInDeliveryProviderID()
    {
        return $this->inDeliveryProviderID;
    }

    /**
     * @param string $inDeliveryProviderID
     * @return SetProperties
     */
    public function setInDeliveryProviderID($inDeliveryProviderID)
    {
        $this->inDeliveryProviderID = $inDeliveryProviderID;
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

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\DeliveryProvider_SSP;

class GetDeliveryProviderTypeXMPTblDataSet
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
     * @var string $inDeliveryProviderType
     */
    protected $inDeliveryProviderType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDeliveryProviderType
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderType = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDeliveryProviderType = $inDeliveryProviderType;
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
     * @return GetDeliveryProviderTypeXMPTblDataSet
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
     * @return GetDeliveryProviderTypeXMPTblDataSet
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDeliveryProviderType()
    {
        return $this->inDeliveryProviderType;
    }

    /**
     * @param string $inDeliveryProviderType
     * @return GetDeliveryProviderTypeXMPTblDataSet
     */
    public function setInDeliveryProviderType($inDeliveryProviderType)
    {
        $this->inDeliveryProviderType = $inDeliveryProviderType;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\OtherServices\DeliveryProvider_SSP;

class GetDeliveryProviderType
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderType
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderType
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\OtherServices\DeliveryProvider_SSP\GetDeliveryProviderType
     */
    public function setInDeliveryProviderType($inDeliveryProviderType)
    {
      $this->inDeliveryProviderType = $inDeliveryProviderType;
      return $this;
    }

}

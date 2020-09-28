<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\DeliveryProvider_SSP;

class GetID
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
     * @var string $inDeliveryProviderName
     */
    protected $inDeliveryProviderName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDeliveryProviderName
     */
    public function __construct($inUsername = null, $inPassword = null, $inDeliveryProviderName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDeliveryProviderName = $inDeliveryProviderName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\DeliveryProvider_SSP\GetID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\DeliveryProvider_SSP\GetID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDeliveryProviderName()
    {
      return $this->inDeliveryProviderName;
    }

    /**
     * @param string $inDeliveryProviderName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\OtherServices\DeliveryProvider_SSP\GetID
     */
    public function setInDeliveryProviderName($inDeliveryProviderName)
    {
      $this->inDeliveryProviderName = $inDeliveryProviderName;
      return $this;
    }

}

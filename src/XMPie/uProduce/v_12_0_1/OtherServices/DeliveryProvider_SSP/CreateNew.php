<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\OtherServices\DeliveryProvider_SSP;

class CreateNew
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
     * @var string $inType
     */
    protected $inType = null;

    /**
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var ArrayOfEmailProviderParameter $inDeliveryProviderParameters
     */
    protected $inDeliveryProviderParameters = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inType
     * @param string $inName
     * @param ArrayOfEmailProviderParameter $inDeliveryProviderParameters
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inType = null, $inName = null, $inDeliveryProviderParameters = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inType = $inType;
      $this->inName = $inName;
      $this->inDeliveryProviderParameters = $inDeliveryProviderParameters;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\OtherServices\DeliveryProvider_SSP\CreateNew
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\OtherServices\DeliveryProvider_SSP\CreateNew
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInType()
    {
      return $this->inType;
    }

    /**
     * @param string $inType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\OtherServices\DeliveryProvider_SSP\CreateNew
     */
    public function setInType($inType)
    {
      $this->inType = $inType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInName()
    {
      return $this->inName;
    }

    /**
     * @param string $inName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\OtherServices\DeliveryProvider_SSP\CreateNew
     */
    public function setInName($inName)
    {
      $this->inName = $inName;
      return $this;
    }

    /**
     * @return ArrayOfEmailProviderParameter
     */
    public function getInDeliveryProviderParameters()
    {
      return $this->inDeliveryProviderParameters;
    }

    /**
     * @param ArrayOfEmailProviderParameter $inDeliveryProviderParameters
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\OtherServices\DeliveryProvider_SSP\CreateNew
     */
    public function setInDeliveryProviderParameters($inDeliveryProviderParameters)
    {
      $this->inDeliveryProviderParameters = $inDeliveryProviderParameters;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\OtherServices\DeliveryProvider_SSP\CreateNew
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}

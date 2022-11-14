<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\AccountDataSource_SSP;

class SetProperty
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
     * @var string $inAccountDataSourceID
     */
    protected $inAccountDataSourceID = null;

    /**
     * @var Property $inProp
     */
    protected $inProp = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountDataSourceID
     * @param Property $inProp
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountDataSourceID = null, $inProp = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountDataSourceID = $inAccountDataSourceID;
      $this->inProp = $inProp;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\AccountDataSource_SSP\SetProperty
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\AccountDataSource_SSP\SetProperty
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAccountDataSourceID()
    {
      return $this->inAccountDataSourceID;
    }

    /**
     * @param string $inAccountDataSourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\AccountDataSource_SSP\SetProperty
     */
    public function setInAccountDataSourceID($inAccountDataSourceID)
    {
      $this->inAccountDataSourceID = $inAccountDataSourceID;
      return $this;
    }

    /**
     * @return Property
     */
    public function getInProp()
    {
      return $this->inProp;
    }

    /**
     * @param Property $inProp
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\AccountDataSource_SSP\SetProperty
     */
    public function setInProp($inProp)
    {
      $this->inProp = $inProp;
      return $this;
    }

}

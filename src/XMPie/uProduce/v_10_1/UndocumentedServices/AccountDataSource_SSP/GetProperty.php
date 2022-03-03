<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\AccountDataSource_SSP;

class GetProperty
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
     * @var string $inPropertyName
     */
    protected $inPropertyName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountDataSourceID
     * @param string $inPropertyName
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountDataSourceID = null, $inPropertyName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountDataSourceID = $inAccountDataSourceID;
      $this->inPropertyName = $inPropertyName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\AccountDataSource_SSP\GetProperty
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\AccountDataSource_SSP\GetProperty
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\AccountDataSource_SSP\GetProperty
     */
    public function setInAccountDataSourceID($inAccountDataSourceID)
    {
      $this->inAccountDataSourceID = $inAccountDataSourceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPropertyName()
    {
      return $this->inPropertyName;
    }

    /**
     * @param string $inPropertyName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_10_1\UndocumentedServices\AccountDataSource_SSP\GetProperty
     */
    public function setInPropertyName($inPropertyName)
    {
      $this->inPropertyName = $inPropertyName;
      return $this;
    }

}

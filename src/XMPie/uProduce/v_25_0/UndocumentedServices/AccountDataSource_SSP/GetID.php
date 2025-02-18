<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP;

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
     * @var string $inAccountID
     */
    protected $inAccountID = null;

    /**
     * @var string $inAccountDataSourceName
     */
    protected $inAccountDataSourceName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountID
     * @param string $inAccountDataSourceName
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountID = null, $inAccountDataSourceName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountID = $inAccountID;
      $this->inAccountDataSourceName = $inAccountDataSourceName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP\GetID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP\GetID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP\GetID
     */
    public function setInAccountID($inAccountID)
    {
      $this->inAccountID = $inAccountID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInAccountDataSourceName()
    {
      return $this->inAccountDataSourceName;
    }

    /**
     * @param string $inAccountDataSourceName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP\GetID
     */
    public function setInAccountDataSourceName($inAccountDataSourceName)
    {
      $this->inAccountDataSourceName = $inAccountDataSourceName;
      return $this;
    }

}

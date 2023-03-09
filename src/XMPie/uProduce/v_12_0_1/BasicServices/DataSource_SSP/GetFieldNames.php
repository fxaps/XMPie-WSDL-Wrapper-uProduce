<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSource_SSP;

class GetFieldNames
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
     * @var string $inDataSourceID
     */
    protected $inDataSourceID = null;

    /**
     * @var string $inTableName
     */
    protected $inTableName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDataSourceID
     * @param string $inTableName
     */
    public function __construct($inUsername = null, $inPassword = null, $inDataSourceID = null, $inTableName = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDataSourceID = $inDataSourceID;
      $this->inTableName = $inTableName;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSource_SSP\GetFieldNames
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSource_SSP\GetFieldNames
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDataSourceID()
    {
      return $this->inDataSourceID;
    }

    /**
     * @param string $inDataSourceID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSource_SSP\GetFieldNames
     */
    public function setInDataSourceID($inDataSourceID)
    {
      $this->inDataSourceID = $inDataSourceID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInTableName()
    {
      return $this->inTableName;
    }

    /**
     * @param string $inTableName
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSource_SSP\GetFieldNames
     */
    public function setInTableName($inTableName)
    {
      $this->inTableName = $inTableName;
      return $this;
    }

}

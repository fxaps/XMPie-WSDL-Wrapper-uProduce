<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSource_SSP;

class HostTables
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
     * @var ArrayOfString $inTableNames
     */
    protected $inTableNames = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDataSourceID
     * @param ArrayOfString $inTableNames
     */
    public function __construct($inUsername = null, $inPassword = null, $inDataSourceID = null, $inTableNames = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inDataSourceID = $inDataSourceID;
      $this->inTableNames = $inTableNames;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSource_SSP\HostTables
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSource_SSP\HostTables
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSource_SSP\HostTables
     */
    public function setInDataSourceID($inDataSourceID)
    {
      $this->inDataSourceID = $inDataSourceID;
      return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInTableNames()
    {
      return $this->inTableNames;
    }

    /**
     * @param ArrayOfString $inTableNames
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\BasicServices\DataSource_SSP\HostTables
     */
    public function setInTableNames($inTableNames)
    {
      $this->inTableNames = $inTableNames;
      return $this;
    }

}

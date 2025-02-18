<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP;

class Replace
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
     * @var Connection $inConnectionInfo
     */
    protected $inConnectionInfo = null;

    /**
     * @var string $inSourceFolder
     */
    protected $inSourceFolder = null;

    /**
     * @var boolean $inDeleteSource
     */
    protected $inDeleteSource = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountDataSourceID
     * @param Connection $inConnectionInfo
     * @param string $inSourceFolder
     * @param boolean $inDeleteSource
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountDataSourceID = null, $inConnectionInfo = null, $inSourceFolder = null, $inDeleteSource = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inAccountDataSourceID = $inAccountDataSourceID;
      $this->inConnectionInfo = $inConnectionInfo;
      $this->inSourceFolder = $inSourceFolder;
      $this->inDeleteSource = $inDeleteSource;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP\Replace
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP\Replace
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP\Replace
     */
    public function setInAccountDataSourceID($inAccountDataSourceID)
    {
      $this->inAccountDataSourceID = $inAccountDataSourceID;
      return $this;
    }

    /**
     * @return Connection
     */
    public function getInConnectionInfo()
    {
      return $this->inConnectionInfo;
    }

    /**
     * @param Connection $inConnectionInfo
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP\Replace
     */
    public function setInConnectionInfo($inConnectionInfo)
    {
      $this->inConnectionInfo = $inConnectionInfo;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSourceFolder()
    {
      return $this->inSourceFolder;
    }

    /**
     * @param string $inSourceFolder
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP\Replace
     */
    public function setInSourceFolder($inSourceFolder)
    {
      $this->inSourceFolder = $inSourceFolder;
      return $this;
    }

    /**
     * @return boolean
     */
    public function getInDeleteSource()
    {
      return $this->inDeleteSource;
    }

    /**
     * @param boolean $inDeleteSource
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP\Replace
     */
    public function setInDeleteSource($inDeleteSource)
    {
      $this->inDeleteSource = $inDeleteSource;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\AccountDataSource_SSP\Replace
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}

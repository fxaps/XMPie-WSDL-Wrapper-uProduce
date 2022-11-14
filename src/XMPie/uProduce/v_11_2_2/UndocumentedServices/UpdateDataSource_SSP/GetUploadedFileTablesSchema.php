<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\UpdateDataSource_SSP;

class GetUploadedFileTablesSchema
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
     * @var string $inFilePath
     */
    protected $inFilePath = null;

    /**
     * @var string $inDataSourceType
     */
    protected $inDataSourceType = null;

    /**
     * @var string $inDelimiter
     */
    protected $inDelimiter = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFilePath
     * @param string $inDataSourceType
     * @param string $inDelimiter
     */
    public function __construct($inUsername = null, $inPassword = null, $inFilePath = null, $inDataSourceType = null, $inDelimiter = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inFilePath = $inFilePath;
      $this->inDataSourceType = $inDataSourceType;
      $this->inDelimiter = $inDelimiter;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\UpdateDataSource_SSP\GetUploadedFileTablesSchema
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\UpdateDataSource_SSP\GetUploadedFileTablesSchema
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInFilePath()
    {
      return $this->inFilePath;
    }

    /**
     * @param string $inFilePath
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\UpdateDataSource_SSP\GetUploadedFileTablesSchema
     */
    public function setInFilePath($inFilePath)
    {
      $this->inFilePath = $inFilePath;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDataSourceType()
    {
      return $this->inDataSourceType;
    }

    /**
     * @param string $inDataSourceType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\UpdateDataSource_SSP\GetUploadedFileTablesSchema
     */
    public function setInDataSourceType($inDataSourceType)
    {
      $this->inDataSourceType = $inDataSourceType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInDelimiter()
    {
      return $this->inDelimiter;
    }

    /**
     * @param string $inDelimiter
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_2_2\UndocumentedServices\UpdateDataSource_SSP\GetUploadedFileTablesSchema
     */
    public function setInDelimiter($inDelimiter)
    {
      $this->inDelimiter = $inDelimiter;
      return $this;
    }

}

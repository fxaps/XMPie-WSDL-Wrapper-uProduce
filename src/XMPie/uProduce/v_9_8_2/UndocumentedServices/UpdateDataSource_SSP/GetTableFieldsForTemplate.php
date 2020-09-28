<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\UpdateDataSource_SSP;

class GetTableFieldsForTemplate
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
     * @var string $inDataSourceId
     */
    protected $inDataSourceId = null;

    /**
     * @var string $inTableName
     */
    protected $inTableName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDataSourceId
     * @param string $inTableName
     */
    public function __construct($inUsername = null, $inPassword = null, $inDataSourceId = null, $inTableName = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDataSourceId = $inDataSourceId;
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
     * @return GetTableFieldsForTemplate
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
     * @return GetTableFieldsForTemplate
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDataSourceId()
    {
        return $this->inDataSourceId;
    }

    /**
     * @param string $inDataSourceId
     * @return GetTableFieldsForTemplate
     */
    public function setInDataSourceId($inDataSourceId)
    {
        $this->inDataSourceId = $inDataSourceId;
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
     * @return GetTableFieldsForTemplate
     */
    public function setInTableName($inTableName)
    {
        $this->inTableName = $inTableName;
        return $this;
    }

}

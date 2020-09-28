<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\DataSource_SSP;

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
     * @return GetFieldNames
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
     * @return GetFieldNames
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
     * @return GetFieldNames
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
     * @return GetFieldNames
     */
    public function setInTableName($inTableName)
    {
        $this->inTableName = $inTableName;
        return $this;
    }

}

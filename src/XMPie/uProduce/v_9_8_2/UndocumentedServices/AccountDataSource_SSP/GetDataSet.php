<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\AccountDataSource_SSP;

class GetDataSet
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inAccountDataSourceID
     */
    public function __construct($inUsername = null, $inPassword = null, $inAccountDataSourceID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inAccountDataSourceID = $inAccountDataSourceID;
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
     * @return GetDataSet
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
     * @return GetDataSet
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
     * @return GetDataSet
     */
    public function setInAccountDataSourceID($inAccountDataSourceID)
    {
        $this->inAccountDataSourceID = $inAccountDataSourceID;
        return $this;
    }

}

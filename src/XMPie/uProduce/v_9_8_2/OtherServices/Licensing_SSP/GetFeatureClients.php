<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Licensing_SSP;

class GetFeatureClients
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
     * @var int $inFeatureTypeID
     */
    protected $inFeatureTypeID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param int $inFeatureTypeID
     */
    public function __construct($inUsername = null, $inPassword = null, $inFeatureTypeID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inFeatureTypeID = $inFeatureTypeID;
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
     * @return GetFeatureClients
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
     * @return GetFeatureClients
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return int
     */
    public function getInFeatureTypeID()
    {
        return $this->inFeatureTypeID;
    }

    /**
     * @param int $inFeatureTypeID
     * @return GetFeatureClients
     */
    public function setInFeatureTypeID($inFeatureTypeID)
    {
        $this->inFeatureTypeID = $inFeatureTypeID;
        return $this;
    }

}

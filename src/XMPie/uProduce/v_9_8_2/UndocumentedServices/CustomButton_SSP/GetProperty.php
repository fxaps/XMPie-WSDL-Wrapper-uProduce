<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\CustomButton_SSP;

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
     * @var string $inCustomButtonID
     */
    protected $inCustomButtonID = null;

    /**
     * @var string $inPropertyName
     */
    protected $inPropertyName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inCustomButtonID
     * @param string $inPropertyName
     */
    public function __construct($inUsername = null, $inPassword = null, $inCustomButtonID = null, $inPropertyName = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inCustomButtonID = $inCustomButtonID;
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
     * @return GetProperty
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
     * @return GetProperty
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInCustomButtonID()
    {
        return $this->inCustomButtonID;
    }

    /**
     * @param string $inCustomButtonID
     * @return GetProperty
     */
    public function setInCustomButtonID($inCustomButtonID)
    {
        $this->inCustomButtonID = $inCustomButtonID;
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
     * @return GetProperty
     */
    public function setInPropertyName($inPropertyName)
    {
        $this->inPropertyName = $inPropertyName;
        return $this;
    }

}

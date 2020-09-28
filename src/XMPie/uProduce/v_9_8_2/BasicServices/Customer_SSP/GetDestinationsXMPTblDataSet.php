<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class GetDestinationsXMPTblDataSet
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
     * @var string $inType
     */
    protected $inType = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inType
     */
    public function __construct($inUsername = null, $inPassword = null, $inType = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inType = $inType;
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
     * @return GetDestinationsXMPTblDataSet
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
     * @return GetDestinationsXMPTblDataSet
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInType()
    {
        return $this->inType;
    }

    /**
     * @param string $inType
     * @return GetDestinationsXMPTblDataSet
     */
    public function setInType($inType)
    {
        $this->inType = $inType;
        return $this;
    }

}

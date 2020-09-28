<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PlanPartsProvider_SSP;

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
     * @var string $inPPPID
     */
    protected $inPPPID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPPPID
     */
    public function __construct($inUsername = null, $inPassword = null, $inPPPID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inPPPID = $inPPPID;
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
    public function getInPPPID()
    {
        return $this->inPPPID;
    }

    /**
     * @param string $inPPPID
     * @return GetDataSet
     */
    public function setInPPPID($inPPPID)
    {
        $this->inPPPID = $inPPPID;
        return $this;
    }

}

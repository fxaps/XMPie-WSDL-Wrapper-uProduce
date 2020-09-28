<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\ProductionServices\Job_SSP;

class GetOutputResultsInfo
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
     * @var string $inJobID
     */
    protected $inJobID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobID
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inJobID = $inJobID;
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
     * @return GetOutputResultsInfo
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
     * @return GetOutputResultsInfo
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInJobID()
    {
        return $this->inJobID;
    }

    /**
     * @param string $inJobID
     * @return GetOutputResultsInfo
     */
    public function setInJobID($inJobID)
    {
        $this->inJobID = $inJobID;
        return $this;
    }

}

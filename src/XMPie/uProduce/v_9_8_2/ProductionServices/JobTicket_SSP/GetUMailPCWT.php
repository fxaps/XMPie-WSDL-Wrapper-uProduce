<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class GetUMailPCWT
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
     * @var string $inPCWT
     */
    protected $inPCWT = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPCWT
     */
    public function __construct($inUsername = null, $inPassword = null, $inPCWT = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inPCWT = $inPCWT;
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
     * @return GetUMailPCWT
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
     * @return GetUMailPCWT
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPCWT()
    {
        return $this->inPCWT;
    }

    /**
     * @param string $inPCWT
     * @return GetUMailPCWT
     */
    public function setInPCWT($inPCWT)
    {
        $this->inPCWT = $inPCWT;
        return $this;
    }

}

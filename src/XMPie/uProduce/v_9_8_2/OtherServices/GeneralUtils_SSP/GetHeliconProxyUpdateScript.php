<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\GeneralUtils_SSP;

class GetHeliconProxyUpdateScript
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
     * @param string $inUsername
     * @param string $inPassword
     */
    public function __construct($inUsername = null, $inPassword = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
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
     * @return GetHeliconProxyUpdateScript
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
     * @return GetHeliconProxyUpdateScript
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

}

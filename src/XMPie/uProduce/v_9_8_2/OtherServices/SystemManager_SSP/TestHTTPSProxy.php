<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\SystemManager_SSP;

class TestHTTPSProxy
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
     * @var string $inProxyServer
     */
    protected $inProxyServer = null;

    /**
     * @var int $inPort
     */
    protected $inPort = null;

    /**
     * @var string $inProxyUsername
     */
    protected $inProxyUsername = null;

    /**
     * @var boolean $inReadPasswordFromDB
     */
    protected $inReadPasswordFromDB = null;

    /**
     * @var string $inProxyPassword
     */
    protected $inProxyPassword = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inProxyServer
     * @param int $inPort
     * @param string $inProxyUsername
     * @param boolean $inReadPasswordFromDB
     * @param string $inProxyPassword
     */
    public function __construct($inUsername = null, $inPassword = null, $inProxyServer = null, $inPort = null, $inProxyUsername = null, $inReadPasswordFromDB = null, $inProxyPassword = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inProxyServer = $inProxyServer;
        $this->inPort = $inPort;
        $this->inProxyUsername = $inProxyUsername;
        $this->inReadPasswordFromDB = $inReadPasswordFromDB;
        $this->inProxyPassword = $inProxyPassword;
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
     * @return TestHTTPSProxy
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
     * @return TestHTTPSProxy
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInProxyServer()
    {
        return $this->inProxyServer;
    }

    /**
     * @param string $inProxyServer
     * @return TestHTTPSProxy
     */
    public function setInProxyServer($inProxyServer)
    {
        $this->inProxyServer = $inProxyServer;
        return $this;
    }

    /**
     * @return int
     */
    public function getInPort()
    {
        return $this->inPort;
    }

    /**
     * @param int $inPort
     * @return TestHTTPSProxy
     */
    public function setInPort($inPort)
    {
        $this->inPort = $inPort;
        return $this;
    }

    /**
     * @return string
     */
    public function getInProxyUsername()
    {
        return $this->inProxyUsername;
    }

    /**
     * @param string $inProxyUsername
     * @return TestHTTPSProxy
     */
    public function setInProxyUsername($inProxyUsername)
    {
        $this->inProxyUsername = $inProxyUsername;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInReadPasswordFromDB()
    {
        return $this->inReadPasswordFromDB;
    }

    /**
     * @param boolean $inReadPasswordFromDB
     * @return TestHTTPSProxy
     */
    public function setInReadPasswordFromDB($inReadPasswordFromDB)
    {
        $this->inReadPasswordFromDB = $inReadPasswordFromDB;
        return $this;
    }

    /**
     * @return string
     */
    public function getInProxyPassword()
    {
        return $this->inProxyPassword;
    }

    /**
     * @param string $inProxyPassword
     * @return TestHTTPSProxy
     */
    public function setInProxyPassword($inProxyPassword)
    {
        $this->inProxyPassword = $inProxyPassword;
        return $this;
    }

}

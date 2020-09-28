<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Licensing_SSP;

class GetAvailableOutputFormats
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
     * @var string $inFilter
     */
    protected $inFilter = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFilter
     */
    public function __construct($inUsername = null, $inPassword = null, $inFilter = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inFilter = $inFilter;
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
     * @return GetAvailableOutputFormats
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
     * @return GetAvailableOutputFormats
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInFilter()
    {
        return $this->inFilter;
    }

    /**
     * @param string $inFilter
     * @return GetAvailableOutputFormats
     */
    public function setInFilter($inFilter)
    {
        $this->inFilter = $inFilter;
        return $this;
    }

}

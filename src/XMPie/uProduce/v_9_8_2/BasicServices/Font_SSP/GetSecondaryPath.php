<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Font_SSP;

class GetSecondaryPath
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
     * @var string $inFontID
     */
    protected $inFontID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFontID
     */
    public function __construct($inUsername = null, $inPassword = null, $inFontID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inFontID = $inFontID;
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
     * @return GetSecondaryPath
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
     * @return GetSecondaryPath
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInFontID()
    {
        return $this->inFontID;
    }

    /**
     * @param string $inFontID
     * @return GetSecondaryPath
     */
    public function setInFontID($inFontID)
    {
        $this->inFontID = $inFontID;
        return $this;
    }

}

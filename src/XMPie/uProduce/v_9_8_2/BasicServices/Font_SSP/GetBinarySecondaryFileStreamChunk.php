<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Font_SSP;

class GetBinarySecondaryFileStreamChunk
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
     * @var int $inOffset
     */
    protected $inOffset = null;

    /**
     * @var int $inoutCount
     */
    protected $inoutCount = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFontID
     * @param int $inOffset
     * @param int $inoutCount
     */
    public function __construct($inUsername = null, $inPassword = null, $inFontID = null, $inOffset = null, $inoutCount = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inFontID = $inFontID;
        $this->inOffset = $inOffset;
        $this->inoutCount = $inoutCount;
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
     * @return GetBinarySecondaryFileStreamChunk
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
     * @return GetBinarySecondaryFileStreamChunk
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
     * @return GetBinarySecondaryFileStreamChunk
     */
    public function setInFontID($inFontID)
    {
        $this->inFontID = $inFontID;
        return $this;
    }

    /**
     * @return int
     */
    public function getInOffset()
    {
        return $this->inOffset;
    }

    /**
     * @param int $inOffset
     * @return GetBinarySecondaryFileStreamChunk
     */
    public function setInOffset($inOffset)
    {
        $this->inOffset = $inOffset;
        return $this;
    }

    /**
     * @return int
     */
    public function getInoutCount()
    {
        return $this->inoutCount;
    }

    /**
     * @param int $inoutCount
     * @return GetBinarySecondaryFileStreamChunk
     */
    public function setInoutCount($inoutCount)
    {
        $this->inoutCount = $inoutCount;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\GeneralUtils_SSP;

class IsFlashCompatibleReturnCompatibleVersion
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
     * @var string $inSourceImageURL
     */
    protected $inSourceImageURL = null;

    /**
     * @var string $inFormat
     */
    protected $inFormat = null;

    /**
     * @var base64Binary $outCompatibleImage
     */
    protected $outCompatibleImage = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inSourceImageURL
     * @param string $inFormat
     * @param base64Binary $outCompatibleImage
     */
    public function __construct($inUsername = null, $inPassword = null, $inSourceImageURL = null, $inFormat = null, $outCompatibleImage = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inSourceImageURL = $inSourceImageURL;
        $this->inFormat = $inFormat;
        $this->outCompatibleImage = $outCompatibleImage;
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
     * @return IsFlashCompatibleReturnCompatibleVersion
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
     * @return IsFlashCompatibleReturnCompatibleVersion
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInSourceImageURL()
    {
        return $this->inSourceImageURL;
    }

    /**
     * @param string $inSourceImageURL
     * @return IsFlashCompatibleReturnCompatibleVersion
     */
    public function setInSourceImageURL($inSourceImageURL)
    {
        $this->inSourceImageURL = $inSourceImageURL;
        return $this;
    }

    /**
     * @return string
     */
    public function getInFormat()
    {
        return $this->inFormat;
    }

    /**
     * @param string $inFormat
     * @return IsFlashCompatibleReturnCompatibleVersion
     */
    public function setInFormat($inFormat)
    {
        $this->inFormat = $inFormat;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getOutCompatibleImage()
    {
        return $this->outCompatibleImage;
    }

    /**
     * @param base64Binary $outCompatibleImage
     * @return IsFlashCompatibleReturnCompatibleVersion
     */
    public function setOutCompatibleImage($outCompatibleImage)
    {
        $this->outCompatibleImage = $outCompatibleImage;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\GeneralUtils_SSP;

class GetBinaryFileThumbnailStream
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
     * @var string $inFilePath
     */
    protected $inFilePath = null;

    /**
     * @var string $inOutputMimeType
     */
    protected $inOutputMimeType = null;

    /**
     * @var int $inMaxPixelWidth
     */
    protected $inMaxPixelWidth = null;

    /**
     * @var int $inMaxPixelHeight
     */
    protected $inMaxPixelHeight = null;

    /**
     * @var int $inResolution
     */
    protected $inResolution = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFilePath
     * @param string $inOutputMimeType
     * @param int $inMaxPixelWidth
     * @param int $inMaxPixelHeight
     * @param int $inResolution
     */
    public function __construct($inUsername = null, $inPassword = null, $inFilePath = null, $inOutputMimeType = null, $inMaxPixelWidth = null, $inMaxPixelHeight = null, $inResolution = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inFilePath = $inFilePath;
        $this->inOutputMimeType = $inOutputMimeType;
        $this->inMaxPixelWidth = $inMaxPixelWidth;
        $this->inMaxPixelHeight = $inMaxPixelHeight;
        $this->inResolution = $inResolution;
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
     * @return GetBinaryFileThumbnailStream
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
     * @return GetBinaryFileThumbnailStream
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInFilePath()
    {
        return $this->inFilePath;
    }

    /**
     * @param string $inFilePath
     * @return GetBinaryFileThumbnailStream
     */
    public function setInFilePath($inFilePath)
    {
        $this->inFilePath = $inFilePath;
        return $this;
    }

    /**
     * @return string
     */
    public function getInOutputMimeType()
    {
        return $this->inOutputMimeType;
    }

    /**
     * @param string $inOutputMimeType
     * @return GetBinaryFileThumbnailStream
     */
    public function setInOutputMimeType($inOutputMimeType)
    {
        $this->inOutputMimeType = $inOutputMimeType;
        return $this;
    }

    /**
     * @return int
     */
    public function getInMaxPixelWidth()
    {
        return $this->inMaxPixelWidth;
    }

    /**
     * @param int $inMaxPixelWidth
     * @return GetBinaryFileThumbnailStream
     */
    public function setInMaxPixelWidth($inMaxPixelWidth)
    {
        $this->inMaxPixelWidth = $inMaxPixelWidth;
        return $this;
    }

    /**
     * @return int
     */
    public function getInMaxPixelHeight()
    {
        return $this->inMaxPixelHeight;
    }

    /**
     * @param int $inMaxPixelHeight
     * @return GetBinaryFileThumbnailStream
     */
    public function setInMaxPixelHeight($inMaxPixelHeight)
    {
        $this->inMaxPixelHeight = $inMaxPixelHeight;
        return $this;
    }

    /**
     * @return int
     */
    public function getInResolution()
    {
        return $this->inResolution;
    }

    /**
     * @param int $inResolution
     * @return GetBinaryFileThumbnailStream
     */
    public function setInResolution($inResolution)
    {
        $this->inResolution = $inResolution;
        return $this;
    }

}

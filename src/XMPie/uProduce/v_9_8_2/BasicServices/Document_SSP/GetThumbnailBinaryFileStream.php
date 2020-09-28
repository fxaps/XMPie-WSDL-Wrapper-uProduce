<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class GetThumbnailBinaryFileStream
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
     * @var string $inDocumentID
     */
    protected $inDocumentID = null;

    /**
     * @var int $inThumbnailIndex
     */
    protected $inThumbnailIndex = null;

    /**
     * @var string $inMimeType
     */
    protected $inMimeType = null;

    /**
     * @var int $inWidth
     */
    protected $inWidth = null;

    /**
     * @var int $inHeight
     */
    protected $inHeight = null;

    /**
     * @var int $inResolution
     */
    protected $inResolution = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentID
     * @param int $inThumbnailIndex
     * @param string $inMimeType
     * @param int $inWidth
     * @param int $inHeight
     * @param int $inResolution
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inThumbnailIndex = null, $inMimeType = null, $inWidth = null, $inHeight = null, $inResolution = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDocumentID = $inDocumentID;
        $this->inThumbnailIndex = $inThumbnailIndex;
        $this->inMimeType = $inMimeType;
        $this->inWidth = $inWidth;
        $this->inHeight = $inHeight;
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
     * @return GetThumbnailBinaryFileStream
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
     * @return GetThumbnailBinaryFileStream
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDocumentID()
    {
        return $this->inDocumentID;
    }

    /**
     * @param string $inDocumentID
     * @return GetThumbnailBinaryFileStream
     */
    public function setInDocumentID($inDocumentID)
    {
        $this->inDocumentID = $inDocumentID;
        return $this;
    }

    /**
     * @return int
     */
    public function getInThumbnailIndex()
    {
        return $this->inThumbnailIndex;
    }

    /**
     * @param int $inThumbnailIndex
     * @return GetThumbnailBinaryFileStream
     */
    public function setInThumbnailIndex($inThumbnailIndex)
    {
        $this->inThumbnailIndex = $inThumbnailIndex;
        return $this;
    }

    /**
     * @return string
     */
    public function getInMimeType()
    {
        return $this->inMimeType;
    }

    /**
     * @param string $inMimeType
     * @return GetThumbnailBinaryFileStream
     */
    public function setInMimeType($inMimeType)
    {
        $this->inMimeType = $inMimeType;
        return $this;
    }

    /**
     * @return int
     */
    public function getInWidth()
    {
        return $this->inWidth;
    }

    /**
     * @param int $inWidth
     * @return GetThumbnailBinaryFileStream
     */
    public function setInWidth($inWidth)
    {
        $this->inWidth = $inWidth;
        return $this;
    }

    /**
     * @return int
     */
    public function getInHeight()
    {
        return $this->inHeight;
    }

    /**
     * @param int $inHeight
     * @return GetThumbnailBinaryFileStream
     */
    public function setInHeight($inHeight)
    {
        $this->inHeight = $inHeight;
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
     * @return GetThumbnailBinaryFileStream
     */
    public function setInResolution($inResolution)
    {
        $this->inResolution = $inResolution;
        return $this;
    }

}

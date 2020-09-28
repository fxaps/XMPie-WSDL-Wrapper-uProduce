<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class GetThumbnailDownloadURL
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
     * @var string $inMimeType
     */
    protected $inMimeType = null;

    /**
     * @var boolean $inIsInline
     */
    protected $inIsInline = null;

    /**
     * @var string $inMacTypeHex
     */
    protected $inMacTypeHex = null;

    /**
     * @var string $inMacCreatorHex
     */
    protected $inMacCreatorHex = null;

    /**
     * @var boolean $inReturnInternalURL
     */
    protected $inReturnInternalURL = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentID
     * @param int $inThumbnailIndex
     * @param int $inWidth
     * @param int $inHeight
     * @param int $inResolution
     * @param string $inMimeType
     * @param boolean $inIsInline
     * @param string $inMacTypeHex
     * @param string $inMacCreatorHex
     * @param boolean $inReturnInternalURL
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inThumbnailIndex = null, $inWidth = null, $inHeight = null, $inResolution = null, $inMimeType = null, $inIsInline = null, $inMacTypeHex = null, $inMacCreatorHex = null, $inReturnInternalURL = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDocumentID = $inDocumentID;
        $this->inThumbnailIndex = $inThumbnailIndex;
        $this->inWidth = $inWidth;
        $this->inHeight = $inHeight;
        $this->inResolution = $inResolution;
        $this->inMimeType = $inMimeType;
        $this->inIsInline = $inIsInline;
        $this->inMacTypeHex = $inMacTypeHex;
        $this->inMacCreatorHex = $inMacCreatorHex;
        $this->inReturnInternalURL = $inReturnInternalURL;
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
     * @return GetThumbnailDownloadURL
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
     * @return GetThumbnailDownloadURL
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
     * @return GetThumbnailDownloadURL
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
     * @return GetThumbnailDownloadURL
     */
    public function setInThumbnailIndex($inThumbnailIndex)
    {
        $this->inThumbnailIndex = $inThumbnailIndex;
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
     * @return GetThumbnailDownloadURL
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
     * @return GetThumbnailDownloadURL
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
     * @return GetThumbnailDownloadURL
     */
    public function setInResolution($inResolution)
    {
        $this->inResolution = $inResolution;
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
     * @return GetThumbnailDownloadURL
     */
    public function setInMimeType($inMimeType)
    {
        $this->inMimeType = $inMimeType;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInIsInline()
    {
        return $this->inIsInline;
    }

    /**
     * @param boolean $inIsInline
     * @return GetThumbnailDownloadURL
     */
    public function setInIsInline($inIsInline)
    {
        $this->inIsInline = $inIsInline;
        return $this;
    }

    /**
     * @return string
     */
    public function getInMacTypeHex()
    {
        return $this->inMacTypeHex;
    }

    /**
     * @param string $inMacTypeHex
     * @return GetThumbnailDownloadURL
     */
    public function setInMacTypeHex($inMacTypeHex)
    {
        $this->inMacTypeHex = $inMacTypeHex;
        return $this;
    }

    /**
     * @return string
     */
    public function getInMacCreatorHex()
    {
        return $this->inMacCreatorHex;
    }

    /**
     * @param string $inMacCreatorHex
     * @return GetThumbnailDownloadURL
     */
    public function setInMacCreatorHex($inMacCreatorHex)
    {
        $this->inMacCreatorHex = $inMacCreatorHex;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getInReturnInternalURL()
    {
        return $this->inReturnInternalURL;
    }

    /**
     * @param boolean $inReturnInternalURL
     * @return GetThumbnailDownloadURL
     */
    public function setInReturnInternalURL($inReturnInternalURL)
    {
        $this->inReturnInternalURL = $inReturnInternalURL;
        return $this;
    }

}

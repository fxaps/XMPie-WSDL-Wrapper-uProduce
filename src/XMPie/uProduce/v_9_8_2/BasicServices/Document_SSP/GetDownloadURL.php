<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class GetDownloadURL
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
     * @param string $inMimeType
     * @param boolean $inIsInline
     * @param string $inMacTypeHex
     * @param string $inMacCreatorHex
     * @param boolean $inReturnInternalURL
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null, $inMimeType = null, $inIsInline = null, $inMacTypeHex = null, $inMacCreatorHex = null, $inReturnInternalURL = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDocumentID = $inDocumentID;
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
     * @return GetDownloadURL
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
     * @return GetDownloadURL
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
     * @return GetDownloadURL
     */
    public function setInDocumentID($inDocumentID)
    {
        $this->inDocumentID = $inDocumentID;
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
     * @return GetDownloadURL
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
     * @return GetDownloadURL
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
     * @return GetDownloadURL
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
     * @return GetDownloadURL
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
     * @return GetDownloadURL
     */
    public function setInReturnInternalURL($inReturnInternalURL)
    {
        $this->inReturnInternalURL = $inReturnInternalURL;
        return $this;
    }

}

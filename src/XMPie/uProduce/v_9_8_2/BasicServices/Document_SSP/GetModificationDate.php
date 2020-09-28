<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Document_SSP;

class GetModificationDate
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDocumentID
     */
    public function __construct($inUsername = null, $inPassword = null, $inDocumentID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDocumentID = $inDocumentID;
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
     * @return GetModificationDate
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
     * @return GetModificationDate
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
     * @return GetModificationDate
     */
    public function setInDocumentID($inDocumentID)
    {
        $this->inDocumentID = $inDocumentID;
        return $this;
    }

}

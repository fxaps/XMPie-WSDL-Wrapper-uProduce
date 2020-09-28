<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\MessagesUtils_SSP;

class DecodeMessage
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
     * @var string $inMessageID
     */
    protected $inMessageID = null;

    /**
     * @var string $inMessageParams
     */
    protected $inMessageParams = null;

    /**
     * @var int $inLanguageID
     */
    protected $inLanguageID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inMessageID
     * @param string $inMessageParams
     * @param int $inLanguageID
     */
    public function __construct($inUsername = null, $inPassword = null, $inMessageID = null, $inMessageParams = null, $inLanguageID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inMessageID = $inMessageID;
        $this->inMessageParams = $inMessageParams;
        $this->inLanguageID = $inLanguageID;
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
     * @return DecodeMessage
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
     * @return DecodeMessage
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInMessageID()
    {
        return $this->inMessageID;
    }

    /**
     * @param string $inMessageID
     * @return DecodeMessage
     */
    public function setInMessageID($inMessageID)
    {
        $this->inMessageID = $inMessageID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInMessageParams()
    {
        return $this->inMessageParams;
    }

    /**
     * @param string $inMessageParams
     * @return DecodeMessage
     */
    public function setInMessageParams($inMessageParams)
    {
        $this->inMessageParams = $inMessageParams;
        return $this;
    }

    /**
     * @return int
     */
    public function getInLanguageID()
    {
        return $this->inLanguageID;
    }

    /**
     * @param int $inLanguageID
     * @return DecodeMessage
     */
    public function setInLanguageID($inLanguageID)
    {
        $this->inLanguageID = $inLanguageID;
        return $this;
    }

}

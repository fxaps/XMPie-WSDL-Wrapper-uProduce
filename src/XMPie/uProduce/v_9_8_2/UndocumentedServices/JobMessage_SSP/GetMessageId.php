<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\JobMessage_SSP;

class GetMessageId
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inMessageID
     */
    public function __construct($inUsername = null, $inPassword = null, $inMessageID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inMessageID = $inMessageID;
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
     * @return GetMessageId
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
     * @return GetMessageId
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
     * @return GetMessageId
     */
    public function setInMessageID($inMessageID)
    {
        $this->inMessageID = $inMessageID;
        return $this;
    }

}

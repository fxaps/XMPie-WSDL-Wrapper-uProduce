<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\TempStorage_SSP;

class AppendFileBinaryStream
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
     * @var string $inFileToken
     */
    protected $inFileToken = null;

    /**
     * @var base64Binary $inBinaryStream
     */
    protected $inBinaryStream = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFileToken
     * @param base64Binary $inBinaryStream
     */
    public function __construct($inUsername = null, $inPassword = null, $inFileToken = null, $inBinaryStream = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inFileToken = $inFileToken;
        $this->inBinaryStream = $inBinaryStream;
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
     * @return AppendFileBinaryStream
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
     * @return AppendFileBinaryStream
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInFileToken()
    {
        return $this->inFileToken;
    }

    /**
     * @param string $inFileToken
     * @return AppendFileBinaryStream
     */
    public function setInFileToken($inFileToken)
    {
        $this->inFileToken = $inFileToken;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getInBinaryStream()
    {
        return $this->inBinaryStream;
    }

    /**
     * @param base64Binary $inBinaryStream
     * @return AppendFileBinaryStream
     */
    public function setInBinaryStream($inBinaryStream)
    {
        $this->inBinaryStream = $inBinaryStream;
        return $this;
    }

}

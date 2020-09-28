<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\GeneralUtils_SSP;

class GetBinaryFileStreamSize
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
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFilePath
     */
    public function __construct($inUsername = null, $inPassword = null, $inFilePath = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inFilePath = $inFilePath;
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
     * @return GetBinaryFileStreamSize
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
     * @return GetBinaryFileStreamSize
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
     * @return GetBinaryFileStreamSize
     */
    public function setInFilePath($inFilePath)
    {
        $this->inFilePath = $inFilePath;
        return $this;
    }

}

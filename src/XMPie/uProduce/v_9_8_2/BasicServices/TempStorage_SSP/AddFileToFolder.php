<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\TempStorage_SSP;

class AddFileToFolder
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
     * @var string $inFolderToken
     */
    protected $inFolderToken = null;

    /**
     * @var string $inFileName
     */
    protected $inFileName = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inFolderToken
     * @param string $inFileName
     */
    public function __construct($inUsername = null, $inPassword = null, $inFolderToken = null, $inFileName = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inFolderToken = $inFolderToken;
        $this->inFileName = $inFileName;
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
     * @return AddFileToFolder
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
     * @return AddFileToFolder
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInFolderToken()
    {
        return $this->inFolderToken;
    }

    /**
     * @param string $inFolderToken
     * @return AddFileToFolder
     */
    public function setInFolderToken($inFolderToken)
    {
        $this->inFolderToken = $inFolderToken;
        return $this;
    }

    /**
     * @return string
     */
    public function getInFileName()
    {
        return $this->inFileName;
    }

    /**
     * @param string $inFileName
     * @return AddFileToFolder
     */
    public function setInFileName($inFileName)
    {
        $this->inFileName = $inFileName;
        return $this;
    }

}

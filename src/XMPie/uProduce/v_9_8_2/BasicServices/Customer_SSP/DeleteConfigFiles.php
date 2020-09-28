<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Customer_SSP;

class DeleteConfigFiles
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
     * @var ArrayOfString $inConfigFileIDArray
     */
    protected $inConfigFileIDArray = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfString $inConfigFileIDArray
     */
    public function __construct($inUsername = null, $inPassword = null, $inConfigFileIDArray = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inConfigFileIDArray = $inConfigFileIDArray;
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
     * @return DeleteConfigFiles
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
     * @return DeleteConfigFiles
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return ArrayOfString
     */
    public function getInConfigFileIDArray()
    {
        return $this->inConfigFileIDArray;
    }

    /**
     * @param ArrayOfString $inConfigFileIDArray
     * @return DeleteConfigFiles
     */
    public function setInConfigFileIDArray($inConfigFileIDArray)
    {
        $this->inConfigFileIDArray = $inConfigFileIDArray;
        return $this;
    }

}

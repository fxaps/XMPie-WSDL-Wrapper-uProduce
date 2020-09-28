<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\Tracker_SSP;

class AddEventType
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
     * @var string $inName
     */
    protected $inName = null;

    /**
     * @var string $inDescription
     */
    protected $inDescription = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inName
     * @param string $inDescription
     */
    public function __construct($inUsername = null, $inPassword = null, $inName = null, $inDescription = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inName = $inName;
        $this->inDescription = $inDescription;
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
     * @return AddEventType
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
     * @return AddEventType
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInName()
    {
        return $this->inName;
    }

    /**
     * @param string $inName
     * @return AddEventType
     */
    public function setInName($inName)
    {
        $this->inName = $inName;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDescription()
    {
        return $this->inDescription;
    }

    /**
     * @param string $inDescription
     * @return AddEventType
     */
    public function setInDescription($inDescription)
    {
        $this->inDescription = $inDescription;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ApplicationServices\Destination_SSP;

class GetAllProperties
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
     * @var string $inDestinationID
     */
    protected $inDestinationID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inDestinationID
     */
    public function __construct($inUsername = null, $inPassword = null, $inDestinationID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inDestinationID = $inDestinationID;
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
     * @return GetAllProperties
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
     * @return GetAllProperties
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInDestinationID()
    {
        return $this->inDestinationID;
    }

    /**
     * @param string $inDestinationID
     * @return GetAllProperties
     */
    public function setInDestinationID($inDestinationID)
    {
        $this->inDestinationID = $inDestinationID;
        return $this;
    }

}

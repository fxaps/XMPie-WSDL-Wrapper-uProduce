<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\BasicServices\Plan_SSP;

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
     * @var string $inPlanID
     */
    protected $inPlanID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPlanID
     */
    public function __construct($inUsername = null, $inPassword = null, $inPlanID = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inPlanID = $inPlanID;
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
    public function getInPlanID()
    {
        return $this->inPlanID;
    }

    /**
     * @param string $inPlanID
     * @return GetModificationDate
     */
    public function setInPlanID($inPlanID)
    {
        $this->inPlanID = $inPlanID;
        return $this;
    }

}

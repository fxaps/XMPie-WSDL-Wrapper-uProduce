<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Production_SSP;

class SubmitJob
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
     * @var string $inJobTicket
     */
    protected $inJobTicket = null;

    /**
     * @var string $inPriority
     */
    protected $inPriority = null;

    /**
     * @var string $inTouchPointID
     */
    protected $inTouchPointID = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inJobTicket
     * @param string $inPriority
     * @param string $inTouchPointID
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inJobTicket = null, $inPriority = null, $inTouchPointID = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inJobTicket = $inJobTicket;
        $this->inPriority = $inPriority;
        $this->inTouchPointID = $inTouchPointID;
        $this->inProps = $inProps;
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
     * @return SubmitJob
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
     * @return SubmitJob
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInJobTicket()
    {
        return $this->inJobTicket;
    }

    /**
     * @param string $inJobTicket
     * @return SubmitJob
     */
    public function setInJobTicket($inJobTicket)
    {
        $this->inJobTicket = $inJobTicket;
        return $this;
    }

    /**
     * @return string
     */
    public function getInPriority()
    {
        return $this->inPriority;
    }

    /**
     * @param string $inPriority
     * @return SubmitJob
     */
    public function setInPriority($inPriority)
    {
        $this->inPriority = $inPriority;
        return $this;
    }

    /**
     * @return string
     */
    public function getInTouchPointID()
    {
        return $this->inTouchPointID;
    }

    /**
     * @param string $inTouchPointID
     * @return SubmitJob
     */
    public function setInTouchPointID($inTouchPointID)
    {
        $this->inTouchPointID = $inTouchPointID;
        return $this;
    }

    /**
     * @return ArrayOfProperty
     */
    public function getInProps()
    {
        return $this->inProps;
    }

    /**
     * @param ArrayOfProperty $inProps
     * @return SubmitJob
     */
    public function setInProps($inProps)
    {
        $this->inProps = $inProps;
        return $this;
    }

}

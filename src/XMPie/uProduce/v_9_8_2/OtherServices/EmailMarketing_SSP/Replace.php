<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\EmailMarketing_SSP;

class Replace
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
     * @var string $inEmailMarketingID
     */
    protected $inEmailMarketingID = null;

    /**
     * @var string $inTicket
     */
    protected $inTicket = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inEmailMarketingID
     * @param string $inTicket
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inEmailMarketingID = null, $inTicket = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inEmailMarketingID = $inEmailMarketingID;
        $this->inTicket = $inTicket;
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
     * @return Replace
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
     * @return Replace
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInEmailMarketingID()
    {
        return $this->inEmailMarketingID;
    }

    /**
     * @param string $inEmailMarketingID
     * @return Replace
     */
    public function setInEmailMarketingID($inEmailMarketingID)
    {
        $this->inEmailMarketingID = $inEmailMarketingID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInTicket()
    {
        return $this->inTicket;
    }

    /**
     * @param string $inTicket
     * @return Replace
     */
    public function setInTicket($inTicket)
    {
        $this->inTicket = $inTicket;
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
     * @return Replace
     */
    public function setInProps($inProps)
    {
        $this->inProps = $inProps;
        return $this;
    }

}

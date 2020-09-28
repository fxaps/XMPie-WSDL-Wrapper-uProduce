<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\JobTicket_SSP;

class SetJobReportingWebService
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
     * @var string $inTicketID
     */
    protected $inTicketID = null;

    /**
     * @var string $inWebServiceURL
     */
    protected $inWebServiceURL = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inTicketID
     * @param string $inWebServiceURL
     */
    public function __construct($inUsername = null, $inPassword = null, $inTicketID = null, $inWebServiceURL = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inTicketID = $inTicketID;
        $this->inWebServiceURL = $inWebServiceURL;
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
     * @return SetJobReportingWebService
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
     * @return SetJobReportingWebService
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInTicketID()
    {
        return $this->inTicketID;
    }

    /**
     * @param string $inTicketID
     * @return SetJobReportingWebService
     */
    public function setInTicketID($inTicketID)
    {
        $this->inTicketID = $inTicketID;
        return $this;
    }

    /**
     * @return string
     */
    public function getInWebServiceURL()
    {
        return $this->inWebServiceURL;
    }

    /**
     * @param string $inWebServiceURL
     * @return SetJobReportingWebService
     */
    public function setInWebServiceURL($inWebServiceURL)
    {
        $this->inWebServiceURL = $inWebServiceURL;
        return $this;
    }

}

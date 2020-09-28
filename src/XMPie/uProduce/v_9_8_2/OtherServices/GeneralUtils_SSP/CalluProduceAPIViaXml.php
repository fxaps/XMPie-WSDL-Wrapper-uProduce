<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\OtherServices\GeneralUtils_SSP;

class CalluProduceAPIViaXml
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
     * @var string $inXML
     */
    protected $inXML = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inXML
     */
    public function __construct($inUsername = null, $inPassword = null, $inXML = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
        $this->inXML = $inXML;
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
     * @return CalluProduceAPIViaXml
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
     * @return CalluProduceAPIViaXml
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
        return $this;
    }

    /**
     * @return string
     */
    public function getInXML()
    {
        return $this->inXML;
    }

    /**
     * @param string $inXML
     * @return CalluProduceAPIViaXml
     */
    public function setInXML($inXML)
    {
        $this->inXML = $inXML;
        return $this;
    }

}

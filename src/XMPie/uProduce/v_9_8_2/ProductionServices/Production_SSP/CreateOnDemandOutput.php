<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\ProductionServices\Production_SSP;

class CreateOnDemandOutput
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
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inProps = null)
    {
        $this->inUsername = $inUsername;
        $this->inPassword = $inPassword;
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
     * @return CreateOnDemandOutput
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
     * @return CreateOnDemandOutput
     */
    public function setInPassword($inPassword)
    {
        $this->inPassword = $inPassword;
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
     * @return CreateOnDemandOutput
     */
    public function setInProps($inProps)
    {
        $this->inProps = $inProps;
        return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PlanPartsProvider_SSP;

class SetProperty
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
     * @var string $inPPPID
     */
    protected $inPPPID = null;

    /**
     * @var Property $inProp
     */
    protected $inProp = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPPPID
     * @param Property $inProp
     */
    public function __construct($inUsername = null, $inPassword = null, $inPPPID = null, $inProp = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPPPID = $inPPPID;
      $this->inProp = $inProp;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PlanPartsProvider_SSP\SetProperty
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PlanPartsProvider_SSP\SetProperty
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPPPID()
    {
      return $this->inPPPID;
    }

    /**
     * @param string $inPPPID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PlanPartsProvider_SSP\SetProperty
     */
    public function setInPPPID($inPPPID)
    {
      $this->inPPPID = $inPPPID;
      return $this;
    }

    /**
     * @return Property
     */
    public function getInProp()
    {
      return $this->inProp;
    }

    /**
     * @param Property $inProp
     * @return \XMPieWsdlClient\XMPie\uProduce\v_9_8_2\UndocumentedServices\PlanPartsProvider_SSP\SetProperty
     */
    public function setInProp($inProp)
    {
      $this->inProp = $inProp;
      return $this;
    }

}

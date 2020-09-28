<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP;

class AddTrackEvent
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
     * @var string $inPopulationOrContextId
     */
    protected $inPopulationOrContextId = null;

    /**
     * @var string $inEventType
     */
    protected $inEventType = null;

    /**
     * @var string $inRecipientID
     */
    protected $inRecipientID = null;

    /**
     * @var string $inEventContext
     */
    protected $inEventContext = null;

    /**
     * @var XMPDateTime $inHitDate
     */
    protected $inHitDate = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPopulationOrContextId
     * @param string $inEventType
     * @param string $inRecipientID
     * @param string $inEventContext
     * @param XMPDateTime $inHitDate
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inPopulationOrContextId = null, $inEventType = null, $inRecipientID = null, $inEventContext = null, $inHitDate = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPopulationOrContextId = $inPopulationOrContextId;
      $this->inEventType = $inEventType;
      $this->inRecipientID = $inRecipientID;
      $this->inEventContext = $inEventContext;
      $this->inHitDate = $inHitDate;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\AddTrackEvent
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\AddTrackEvent
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInPopulationOrContextId()
    {
      return $this->inPopulationOrContextId;
    }

    /**
     * @param string $inPopulationOrContextId
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\AddTrackEvent
     */
    public function setInPopulationOrContextId($inPopulationOrContextId)
    {
      $this->inPopulationOrContextId = $inPopulationOrContextId;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEventType()
    {
      return $this->inEventType;
    }

    /**
     * @param string $inEventType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\AddTrackEvent
     */
    public function setInEventType($inEventType)
    {
      $this->inEventType = $inEventType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInRecipientID()
    {
      return $this->inRecipientID;
    }

    /**
     * @param string $inRecipientID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\AddTrackEvent
     */
    public function setInRecipientID($inRecipientID)
    {
      $this->inRecipientID = $inRecipientID;
      return $this;
    }

    /**
     * @return string
     */
    public function getInEventContext()
    {
      return $this->inEventContext;
    }

    /**
     * @param string $inEventContext
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\AddTrackEvent
     */
    public function setInEventContext($inEventContext)
    {
      $this->inEventContext = $inEventContext;
      return $this;
    }

    /**
     * @return XMPDateTime
     */
    public function getInHitDate()
    {
      return $this->inHitDate;
    }

    /**
     * @param XMPDateTime $inHitDate
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\AddTrackEvent
     */
    public function setInHitDate($inHitDate)
    {
      $this->inHitDate = $inHitDate;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_8_2_3\UndocumentedServices\Population_SSP\AddTrackEvent
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}

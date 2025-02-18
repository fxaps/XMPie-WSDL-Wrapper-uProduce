<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP;

class IsRecipientExist
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
     * @var string $inRecipientID
     */
    protected $inRecipientID = null;

    /**
     * @var ArrayOfProperty $inProps
     */
    protected $inProps = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inPopulationOrContextId
     * @param string $inRecipientID
     * @param ArrayOfProperty $inProps
     */
    public function __construct($inUsername = null, $inPassword = null, $inPopulationOrContextId = null, $inRecipientID = null, $inProps = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inPopulationOrContextId = $inPopulationOrContextId;
      $this->inRecipientID = $inRecipientID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\IsRecipientExist
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\IsRecipientExist
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\IsRecipientExist
     */
    public function setInPopulationOrContextId($inPopulationOrContextId)
    {
      $this->inPopulationOrContextId = $inPopulationOrContextId;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\IsRecipientExist
     */
    public function setInRecipientID($inRecipientID)
    {
      $this->inRecipientID = $inRecipientID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\Population_SSP\IsRecipientExist
     */
    public function setInProps($inProps)
    {
      $this->inProps = $inProps;
      return $this;
    }

}

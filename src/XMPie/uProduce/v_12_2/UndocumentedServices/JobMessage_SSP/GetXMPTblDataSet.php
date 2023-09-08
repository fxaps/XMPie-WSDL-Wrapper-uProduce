<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\JobMessage_SSP;

class GetXMPTblDataSet
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
     * @var string $inMessageID
     */
    protected $inMessageID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inMessageID
     */
    public function __construct($inUsername = null, $inPassword = null, $inMessageID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inMessageID = $inMessageID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\JobMessage_SSP\GetXMPTblDataSet
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\JobMessage_SSP\GetXMPTblDataSet
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInMessageID()
    {
      return $this->inMessageID;
    }

    /**
     * @param string $inMessageID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_2\UndocumentedServices\JobMessage_SSP\GetXMPTblDataSet
     */
    public function setInMessageID($inMessageID)
    {
      $this->inMessageID = $inMessageID;
      return $this;
    }

}

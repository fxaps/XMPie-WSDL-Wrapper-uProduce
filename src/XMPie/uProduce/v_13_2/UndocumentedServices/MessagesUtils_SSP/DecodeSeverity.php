<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\MessagesUtils_SSP;

class DecodeSeverity
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
     * @var string $inSeverityID
     */
    protected $inSeverityID = null;

    /**
     * @var int $inLanguageID
     */
    protected $inLanguageID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inSeverityID
     * @param int $inLanguageID
     */
    public function __construct($inUsername = null, $inPassword = null, $inSeverityID = null, $inLanguageID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inSeverityID = $inSeverityID;
      $this->inLanguageID = $inLanguageID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\MessagesUtils_SSP\DecodeSeverity
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\MessagesUtils_SSP\DecodeSeverity
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSeverityID()
    {
      return $this->inSeverityID;
    }

    /**
     * @param string $inSeverityID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\MessagesUtils_SSP\DecodeSeverity
     */
    public function setInSeverityID($inSeverityID)
    {
      $this->inSeverityID = $inSeverityID;
      return $this;
    }

    /**
     * @return int
     */
    public function getInLanguageID()
    {
      return $this->inLanguageID;
    }

    /**
     * @param int $inLanguageID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_13_2\UndocumentedServices\MessagesUtils_SSP\DecodeSeverity
     */
    public function setInLanguageID($inLanguageID)
    {
      $this->inLanguageID = $inLanguageID;
      return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\MessagesUtils_SSP;

class DecodeContext
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
     * @var string $inContextID
     */
    protected $inContextID = null;

    /**
     * @var int $inLanguageID
     */
    protected $inLanguageID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inContextID
     * @param int $inLanguageID
     */
    public function __construct($inUsername = null, $inPassword = null, $inContextID = null, $inLanguageID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inContextID = $inContextID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\MessagesUtils_SSP\DecodeContext
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\MessagesUtils_SSP\DecodeContext
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInContextID()
    {
      return $this->inContextID;
    }

    /**
     * @param string $inContextID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\MessagesUtils_SSP\DecodeContext
     */
    public function setInContextID($inContextID)
    {
      $this->inContextID = $inContextID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_11_1\UndocumentedServices\MessagesUtils_SSP\DecodeContext
     */
    public function setInLanguageID($inLanguageID)
    {
      $this->inLanguageID = $inLanguageID;
      return $this;
    }

}

<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_12_0_1\OtherServices\GeneralUtils_SSP;

class IsFlashCompatible
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
     * @var string $inSourceImageURL
     */
    protected $inSourceImageURL = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inSourceImageURL
     */
    public function __construct($inUsername = null, $inPassword = null, $inSourceImageURL = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inSourceImageURL = $inSourceImageURL;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\OtherServices\GeneralUtils_SSP\IsFlashCompatible
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\OtherServices\GeneralUtils_SSP\IsFlashCompatible
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInSourceImageURL()
    {
      return $this->inSourceImageURL;
    }

    /**
     * @param string $inSourceImageURL
     * @return \XMPieWsdlClient\XMPie\uProduce\v_12_0_1\OtherServices\GeneralUtils_SSP\IsFlashCompatible
     */
    public function setInSourceImageURL($inSourceImageURL)
    {
      $this->inSourceImageURL = $inSourceImageURL;
      return $this;
    }

}

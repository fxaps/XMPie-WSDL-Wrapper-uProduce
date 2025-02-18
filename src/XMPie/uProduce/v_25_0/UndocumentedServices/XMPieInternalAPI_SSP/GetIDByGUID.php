<?php

namespace XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\XMPieInternalAPI_SSP;

class GetIDByGUID
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
     * @var string $inObjectType
     */
    protected $inObjectType = null;

    /**
     * @var string $inObjectGUID
     */
    protected $inObjectGUID = null;

    /**
     * @param string $inUsername
     * @param string $inPassword
     * @param string $inObjectType
     * @param string $inObjectGUID
     */
    public function __construct($inUsername = null, $inPassword = null, $inObjectType = null, $inObjectGUID = null)
    {
      $this->inUsername = $inUsername;
      $this->inPassword = $inPassword;
      $this->inObjectType = $inObjectType;
      $this->inObjectGUID = $inObjectGUID;
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID
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
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID
     */
    public function setInPassword($inPassword)
    {
      $this->inPassword = $inPassword;
      return $this;
    }

    /**
     * @return string
     */
    public function getInObjectType()
    {
      return $this->inObjectType;
    }

    /**
     * @param string $inObjectType
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID
     */
    public function setInObjectType($inObjectType)
    {
      $this->inObjectType = $inObjectType;
      return $this;
    }

    /**
     * @return string
     */
    public function getInObjectGUID()
    {
      return $this->inObjectGUID;
    }

    /**
     * @param string $inObjectGUID
     * @return \XMPieWsdlClient\XMPie\uProduce\v_25_0\UndocumentedServices\XMPieInternalAPI_SSP\GetIDByGUID
     */
    public function setInObjectGUID($inObjectGUID)
    {
      $this->inObjectGUID = $inObjectGUID;
      return $this;
    }

}
